
from django.conf.urls import include, url

from conflictos.views import index, conflictos_view, conflictos_list,conflictos_listb, tabla

urlpatterns = [
    url(r'^$', index, name='index'),
    url(r'^tabla', tabla, name='tabla'),

    url(r'^nuevo', conflictos_view, name='conflictos_view'),
    url(r'^lista', conflictos_list, name='conflictos_list'),
    url(r'^lista-conflicto', conflictos_listb, name='conflictos_listb'),
    
]