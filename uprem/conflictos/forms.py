from django import forms
from conflictos.models import Conflictos




class ConflictosForm(forms.ModelForm):

	class Meta:
		model = Conflictos

		fields = [
			'nombre',
			'version',
			'autores',
			'fuentes',
			'descripcion',
			'importancia',
			'urgencia',
			'estado',
			'comentarios',
		]

		Labels ={
			'nombre': 'Nombre',
			'version': 'Version',
			'autores': 'Autores',
			'fuentes': 'Fuente',
			'descripcion': 'Descripcion',
			'importancia': 'Importancia',
			'urgencia': 'Urgencia',
			'estado': 'Estado',
			'comentarios': 'Comentarios',
		}

		widgets ={
			'nombre': forms.TextInput(attrs={'class':'validate'}),
			'version': forms.TextInput(attrs={'class':'validate'}),
			'autores': forms.TextInput(attrs={'class':'validate'}),
			'fuentes': forms.TextInput(attrs={'class':'validate'}),
			'descripcion': forms.TextInput(attrs={'class':'validate'}),
			'importancia': forms.TextInput(attrs={'class':'validate'}),
			'urgencia': forms.TextInput(attrs={'class':'validate'}),
			'estado': forms.TextInput(attrs={'class':'validate'}),
			'comentarios': forms.TextInput(attrs={'class':'validate'}),
		}
		
		
			
	