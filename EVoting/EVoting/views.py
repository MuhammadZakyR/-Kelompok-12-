from django.shortcuts import render

def loginview(request):

	return render(request,'login.html')
def homeview(request):
	
	return render(request,'home.html')