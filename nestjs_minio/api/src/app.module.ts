import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
//import { FilesController } from './files/files.controller';
//import { FilesService } from './files/files.service';
//import { FileController } from './file/file.controller';
//import { FileService } from './file/file.service';

@Module({
  imports: [],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
