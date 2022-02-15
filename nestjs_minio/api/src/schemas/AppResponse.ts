export class AppResponse {
  constructor(
    // public status: Boolean,
    public statusCode: number,
    public data: any = undefined,
    public message: string = 'Success',
  ) {}
}
