import { Injectable } from '@nestjs/common';
import { PrismaService } from './prisma.service';
import { Prisma } from '@prisma/client';

@Injectable()
export class AppService {
  constructor(private readonly prisma: PrismaService) {}

  async create(params: any) {
    try {
      const data: Prisma.EmailsUncheckedCreateInput = {
        email: params.email,
        tags: params.tags,
        domain: params.domain,
      };

      return this.prisma.emails.create({ data: data });
    } catch (error) {
      return { error: error.message };
    }
  }
}
