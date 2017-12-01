from django.conf.urls import include, url

from tablas.views import conflictos_list

urlpatterns = [

   url(r'^$', conflictos_list, name='conflictos_list'),
 
]