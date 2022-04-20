# Next Crud Test project

## Zero to Dev
Execute [`create-next-app`](https://github.com/vercel/next.js/tree/canary/packages/create-next-app) with [npm](https://docs.npmjs.com/cli/init) or [Yarn](https://yarnpkg.com/lang/en/docs/cli/create/) to bootstrap the example:

```bash
npx create-next-app --example with-tailwindcss .
# or
yarn create next-app --example with-tailwindcss .
# or
pnpm create next-app -- --example with-tailwindcss .
```

## Install & Configure prisma
Install necessary dependencies and runs prisma CLI to check that's installed

```bash
yarn add prisma -D
npx prisma
```

Setup prisma project by creating schema

```bash
npx prisma init
```

Install client and generate it

```bash
yarn add @prisma/client
npx prisma generate
```

### Push db to
Push changes to DB

```bash
npx prisma db push
```

