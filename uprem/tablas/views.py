
from django.shortcuts import render, redirect
from django.http import HttpResponse
from tablas.models import Conflictos

# Create your views here.
def conflictos_list(request):
	conflicto = Conflictos.objects.all()
	contexto = {'conflictos':conflicto}
	return render(request, 'vista/lista.html', contexto)
