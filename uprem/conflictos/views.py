

from django.shortcuts import render, redirect
from django.http import HttpResponse
from conflictos.forms import ConflictosForm
from conflictos.models import Conflictos

# Create your views here.
def index(request):
	return render(request, 'vista/index.html')

def tabla(request):
	return render(request, 'vita/tabla.html')
	

def conflictos_view(request):
	if request.method == 'POST':
		form = ConflictosForm(request.POST)
		if form.is_valid():
			form.save()
		return redirect('index')
	else:
		form = ConflictosForm()
	return render(request, 'vista/formulario.html',{'form':form})

def conflictos_list(request):
	conflicto = Conflictos.objects.all()
	contexto = {'conflictos':conflicto}
	return render(request, 'vista/lista.html', contexto)


def conflictos_listb(request):
	conflicto = Conflictos.objects.all()
	contexto = {'conflictos':conflicto}
	return render(request, 'base/tabla-conflicto.html', contexto)	