# -*- coding: utf-8 -*-
# Generated by Django 1.11.6 on 2017-12-01 05:00
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Conflictos',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre', models.CharField(max_length=250)),
                ('version', models.CharField(max_length=200)),
                ('autores', models.CharField(max_length=250)),
                ('fuentes', models.CharField(max_length=200)),
                ('descripcion', models.CharField(max_length=250)),
                ('importancia', models.CharField(max_length=200)),
                ('urgencia', models.CharField(max_length=250)),
                ('estado', models.CharField(max_length=200)),
                ('comentarios', models.CharField(max_length=250)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
            ],
        ),
    ]
