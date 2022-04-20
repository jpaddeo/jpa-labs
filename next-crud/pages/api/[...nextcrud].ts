import { User, Post, ModelName } from '@prisma/client'
import NextCrud, { PrismaAdapter } from '@premieroctet/next-crud'
import { prisma } from '../../db'

const handler = NextCrud({
  adapter: new PrismaAdapter<User | Post, ModelName>({
    prismaClient: prisma,
  }),
  swagger: {
    title: 'Next CRUD Test',
    apiUrl: 'https://localhost:3000/api',
    config: {
      User: {
        tag: {
          name: 'Users',
        },
      },
      Post: {
        tag: {
          name: 'Posts',
        },
      },
    },
  },
})
export default handler
