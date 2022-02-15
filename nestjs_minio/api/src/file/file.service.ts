import { Injectable, HttpException, BadRequestException } from '@nestjs/common';
import { v4 as uuidv4 } from 'uuid';
import path from '../utils/path';

import { AppResponse } from '../schemas/AppResponse';

import fastify = require('fastify');
import minioClient from '../utils/minio.client';

@Injectable()
export class FileService {
    
  async uploadFiles(req: fastify.FastifyRequest): Promise<any> {
      
  }
}
