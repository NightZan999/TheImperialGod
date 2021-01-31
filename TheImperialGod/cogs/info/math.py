import discord
from discord.ext import commands
from discord.ext.commands import cooldown, BucketType
import math as m

class Mathematics(commands.Cog):
    def __init__(self, client):
        self.client = client
    
    @commands.Cog.listener()
    async def on_ready(self):
        print("Mathematics commands are ready!")
        
    @commands.command()
    @cooldown(1, 5, BucketType.channel)
    async def add(self, ctx, num1, num2):
        try:
            num1 = float(num1)
            num2 = float(num2)
        except:
            await ctx.send("Both your numbers have to be integers! Next time add integers!")
            return
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Add Successful", color = ctx.author.color)
            em.add_field(name = "Number 1:", value = f"`{num1}`")
            em.add_field(name=  "Number 2:", value = f"`{num2}`")
            em.add_field(name = "Answer", value = f"`{num1 + num2}`", inline = False)
            return await ctx.send(embed = em)

    @add.error
    async def add_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Add Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 2 numbers to add!")
            em.add_field(name = "Usage:", value = f"```\nimp add <num1> <num2>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly adding!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)
    
    @commands.command(aliases=["sub"])
    @cooldown(1, 5, BucketType.channel)
    async def subtract(self, ctx, num1, num2):
        try:
            num1 = float(num1)
            num2 = float(num2)
        except:
            await ctx.send("Both your numbers have to be integers! Next time subtract integers!")
            return
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Subtract Successful", color = ctx.author.color)
            em.add_field(name = "Number 1:", value = f"`{num1}`")
            em.add_field(name=  "Number 2:", value = f"`{num2}`")
            em.add_field(name = "Answer", value = f"`{num1 - num2}`", inline = False)
            return await ctx.send(embed = em)

    @subtract.error
    async def subtract_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Subtract Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 2 numbers to subtract!")
            em.add_field(name = "Usage:", value = f"```\nimp sub <num1> <num2>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly subtracting!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)

    @commands.command(aliases=["mul"])
    @cooldown(1, 5, BucketType.channel)
    async def multiply(self, ctx, num1, num2):
        try:
            num1 = float(num1)
            num2 = float(num2)
        except:
            await ctx.send("Both your numbers have to be integers! Next time multiply integers!")
            return
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Multiply Successful", color = ctx.author.color)
            em.add_field(name = "Number 1:", value = f"`{num1}`")
            em.add_field(name=  "Number 2:", value = f"`{num2}`")
            em.add_field(name = "Answer", value = f"`{num1 * num2}`", inline = False)
            return await ctx.send(embed = em)

    @multiply.error
    async def multiply_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Multiply Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 2 numbers to multiply!")
            em.add_field(name = "Usage:", value = f"```\nimp mul <num1> <num2>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly multiplying!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)

    @commands.command(aliases=["div"])
    @cooldown(1, 5, BucketType.channel)
    async def divide(self, ctx, num1, num2):
        try:
            num1 = float(num1)
            num2 = float(num2)
        except:
            await ctx.send("Both your numbers have to be integers! Next time divide integers!")
            return
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Divide Successful", color = ctx.author.color)
            em.add_field(name = "Number 1:", value = f"`{num1}`")
            em.add_field(name=  "Number 2:", value = f"`{num2}`")
            em.add_field(name = "Answer", value = f"`{num1 / num2}`", inline = False)
            return await ctx.send(embed = em)

    @divide.error
    async def divide_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Divide Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 2 numbers to divide!")
            em.add_field(name = "Usage:", value = f"```\nimp div <num1> <num2>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly dividing!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)

    @commands.command(aliases=["sq"])
    @cooldown(1, 30, BucketType.user)
    async def square(self, ctx, num):
        try:
            num = float(num)
        except:
            return await ctx.channel.send("Your number has to be an integer")
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Square Successful", color = ctx.author.color)
            em.add_field(name = "Number", value = f"`{num}`")
            em.add_field(name = "Answer", value = f"`{num * num}`", inline = False)
            return await ctx.send(embed = em)

    @square.error
    async def square_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Square Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 1 number to square!")
            em.add_field(name = "Usage:", value = f"```\nimp sq <num>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly squaring!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)

    @commands.command(aliases=["sqrt"])
    @cooldown(1, 30, BucketType.user)
    async def squareroot(self, ctx, num):
        try:
            num = float(num)
        except:
            return await ctx.channel.send("Your number has to be an integer")
        else:
            em = discord.Embed(title = "<:success:761297849475399710> Squareroot Successful", color = ctx.author.color)
            em.add_field(name = "Number", value = f"`{num}`")
            em.add_field(name = "Answer", value = f"`{m.sqrt(num)}`", inline = False)
            return await ctx.send(embed = em)

    @squareroot.error
    async def squareroot_error(self, ctx, error):
        if isinstance(error, commands.MissingRequiredArgument):
            em = discord.Embed(title = "<:fail:761292267360485378> Squareroot Failed", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "You didn't provide 1 number to squareroot!")
            em.add_field(name = "Usage:", value = f"```\nimp sqrt <num>\n```")
            await ctx.send(embed = em)
        if isinstance(error, commands.CommandOnCooldown):
            em = discord.Embed(title = "<:fail:761292267360485378> Slow it down C'mon", color = ctx.author.color)
            em.add_field(name = "Reason:", value = "Did you go to middle school? Stop constantly squarerooting!")
            em.add_field(name = "Try again in:", value = "{:.2f}".format(error.retry_after))
            await ctx.send(embed = em)

def setup(client):
    client.add_cog(Mathematics(client))