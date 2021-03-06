import discord
from discord.ext import commands
from discord import Embed
import json
import DiscordUtils
from jishaku.codeblocks import codeblock_converter

class Owner(commands.Cog):
    def __init__(self, client):
        self.client = client
        with open("./config.json", "r") as f:
            config = json.load(f)
        self.ownerId = config["IDs"]["ownerId"]

    @commands.Cog.listener()
    async def on_ready(self):
        print("Owner commands are loaded!")

    @commands.command()
    @commands.is_owner()
    async def leaveguild(self, ctx, guild_id : int):
        # send an embed
        embed = discord.Embed(title = "TheImperialGod leaves a guild", color = ctx.author.color)
        embed.add_field(name = f"Guild:", value = f"`{guild.name}`")
        embed.add_field(name = "New Usercount:", value = f"`{len(self.client.users)}`")
        embed.add_field(name = "New Servercount:", value = f'`{len(self.client.guilds)}`')
        await ctx.send(embed = embed)
        # now leave the guild
        guild = self.client.get_guild(guild_id)
        await guild.leave()

    @commands.command()
    @commands.is_owner()
    async def osay(self, ctx, *, arg):
        """Says what you tell it to
        Uses: `imp osay <message>`"""
        await ctx.message.delete()
        await ctx.send(arg)

    @commands.command()
    @commands.is_owner()
    async def load(self, ctx, *, extension):
        try:
            self.client.load_extension(extension)
        except:
            await ctx.send("That cog is alreay loaded, my lord!")
            return
        await ctx.send("Loaded the extension my lord!")
    
    @commands.command()
    @commands.is_owner()
    async def unload(self, ctx, *, extension):
        if extension.lower() == "cogs.moderation.owner":
            # if the owner disables owner commands, then they can't load back the extension ;-;
            await ctx.send("You can't unload owner cog!")
            return
        try:
            self.client.unload_extension(extension)
        except:
            await ctx.send("That cog is already unloaded, my lord")
            return
        await ctx.send("Unloaded the extension my lord!")
    
    @commands.command()
    @commands.is_owner()
    async def reload(self, ctx, *, extension):
        self.client.unload_extension(extension)
        self.client.load_extension(extension)
        await ctx.send("Reloaded the extension my lord!")

    @commands.command()
    @commands.is_owner()
    async def embed(self, ctx, *, content):
        try:
            title, desc = content.split("|")
        except:
            await ctx.send("Type an embed in this format: `imp embed {title} | {description}`")
            return
        else:
            await ctx.message.delete()
            em = discord.Embed(title = title, color = ctx.author.color, description= desc)
            em.set_author(name = ctx.author.name, icon_url = ctx.author.avatar_url)
            em.set_footer(text = f"Requested by {ctx.author.name}", icon_url = ctx.author.avatar_url)
            await ctx.send(embed = em)

    @commands.command()
    @commands.is_owner()
    async def guilds(self, ctx):
        em1 = discord.Embed(title=  "Imperial Guilds [1 - 20]", color = ctx.author.color, description = "The first 20 guilds of TheImperialGod")
        em2 = discord.Embed(title=  "Imperial Guilds [20 - 40]", color = ctx.author.color, description = "The next 20 guilds of TheImperialGod")
        em3 = discord.Embed(title=  "Imperial Guilds [40 - 60]", color = ctx.author.color, description = "The last 20 guilds of TheImperialGod")
        for i in range(0, len(self.client.guilds)):
            guild = self.client.guilds[i]
            if i < 20:
                em1.add_field(name = f"{guild.name}", value = f"```diff\n+ ID: {guild.id}\n+ Owner: {guild.owner.name}\n- Members: {guild.member_count}```")
            elif i > 20 and i < 40:
                em2.add_field(name = f"{guild.name}", value = f"```diff\n+ ID: {guild.id}\n+ Owner: {guild.owner.name}\n- Members: {guild.member_count}```")
            else:
                em3.add_field(name = f"{guild.name}", value = f"```diff\n+ ID: {guild.id}\n+ Owner: {guild.owner.name}\n- Members: {guild.member_count}```")
        paginator = DiscordUtils.Pagination.AutoEmbedPaginator(ctx)
        embeds = [em1, em2, em3]
        await paginator.run(embeds)
            
    @commands.command()
    @commands.is_owner()
    async def eval(self, ctx, *, code : codeblock_converter):
        cog = self.client.get_cog("Jishaku")
        await cog.jsk_python(ctx, argument=code)
    

def setup(client):
    client.add_cog(Owner(client))
