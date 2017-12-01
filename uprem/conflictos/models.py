# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.contrib import admin
from django.db import models

# Create your models here.
class Conflictos(models.Model):
  nombre = models.CharField(max_length=250)
  version = models.CharField(max_length=200)
  autores = models.CharField(max_length=250)
  fuentes = models.CharField(max_length=200)
  descripcion = models.CharField(max_length=250)
  importancia = models.CharField(max_length=200)
  urgencia = models.CharField(max_length=250)
  estado = models.CharField(max_length=200)
  comentarios = models.CharField(max_length=250)
  created_at = models.DateTimeField(auto_now_add=True)
  updated_at = models.DateTimeField(auto_now=True)
 
 