import { Controller, Get, HttpCode } from "@nestjs/common";
import { response } from "express";

@Controller('hero')
export class HeroController{
    @Get('index')
    @HttpCode(200)
    index() {
        response.json
    }
    @Get('create')
    create() {
        return 'hero create';
    }
}