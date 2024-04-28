# # authentication/views.py

# from django.shortcuts import render, redirect
# from .forms import SignUpForm, LoginForm
# from .models import User

# def signup(request):
#     if request.method == 'POST':
#         form = SignUpForm(request.POST)
#         if form.is_valid():
#             form.save()
#             return redirect('login')
#     else:
#         form = SignUpForm()
#     return render(request, 'signup.html', {'form': form})

# def login(request):
#     if request.method == 'POST':
#         form = LoginForm(request.POST)
#         if form.is_valid():
#             username = form.cleaned_data['username']
#             password = form.cleaned_data['password']
#             user = User.objects.filter(username=username, password=password).first()
#             if user:
#                 # Authentication successful
#                 return redirect('home')
#             else:
#                 # Authentication failed
#                 return render(request, 'login.html', {'form': form, 'error': 'Invalid username or password'})
#     else:
#         form = LoginForm()
#     return render(request, 'login.html', {'form': form})

from django.shortcuts import render
from django.http import HttpResponse

 # Create your views here.

def index(request):
  return HttpResponse("Hello, world!")