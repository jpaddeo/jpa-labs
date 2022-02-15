import { Injectable, HttpException, BadRequestException } from '@nestjs/common';
import fastify = require('fastify');
import { resolve } from 'path/posix';
import { AppResponse } from './schemas/AppResponse';
import { v4 as uuidv4 } from 'uuid';
import path from 'path';

const Minio = require('minio');

@Injectable()
export class AppService {
  async uploadFile(req: fastify.FastifyRequest): Promise<any> {
    const promises = [];
    const minioClient = new Minio.Client({
      endPoint: 'localhost',
      port: 9000,
      useSSL: false,
      accessKey: 'minioadmin',
      secretKey: 'minioadmin',
    });
    const bucket = 'docu';
    const bucketExists = await minioClient.bucketExists(bucket);
    if (!bucketExists) {
      await minioClient.makeBucket(bucket, 'us-east-1');
    }
    return new Promise((resolve, reject) => {
      const mp = req.multipart(
        (field, file, filename, encoding, mimetype: string) => {
          let ext = path.extname(filename).substr(1).toLocaleLowerCase();
          let objectFileName = `${uuidv4()}.${ext}`;
          const metaData = {
            'Content-Type': mimetype,
            Key: field,
            'Legajo-Id': 'MPF00012121',
          };
          const uploadPromise = minioClient.putObject(
            bucket,
            objectFileName,
            file,
            metaData,
          );
          promises.push(uploadPromise);
        },
        (err) => {
          if (err) {
            reject(new HttpException(err, 500));
          } else {
            Promise.all(promises).then(
              (data) => {
                resolve({ result: 'OK' });
              },
              (err) => {
                reject(new HttpException(err, 500));
              },
            );
          }
        },
      );
      mp.on('file', (fieldname: string, stream: any) => {
        stream.on('end', function () {
          if (stream.truncated) {
            reject(
              new BadRequestException(
                new AppResponse(400, undefined, 'Maximum size of file reached'),
              ),
            );
          }
        });
      });
      mp.on('partsLimit', () => {
        reject(
          new BadRequestException(
            new AppResponse(
              400,
              undefined,
              'Maximum number of form parts reached',
            ),
          ),
        );
      });

      mp.on('filesLimit', () => {
        reject(
          new BadRequestException(
            new AppResponse(400, undefined, 'Maximum number of files reached'),
          ),
        );
      });

      mp.on('fieldsLimit', () => {
        reject(
          new BadRequestException(
            new AppResponse(400, undefined, 'Maximum number of fields reached'),
          ),
        );
      });

      mp.on('field', function (key, value) {
        console.log('form-data', key, value);
      });
    });
  }
}
