import string
import numpy as np
import random
import math
import pyqrcode
from tkinter.ttk import *
import time
from playsound import playsound
from pyqrcode import QRCode
import tkinter as tk
from PIL import ImageTk,Image
import smtplib
from tkinter import messagebox as tkMessageBox
import datetime
import os
from tkinter import font as tkFont
import win32print
import win32ui
from PIL import Image, ImageWin
def printer():
       PHYSICAL_WIDTH = 110
       PHYSICAL_HEIGHT = 110
       printer_name = win32print.GetDefaultPrinter ()
       file_name = "myqr.jpg"
       hDC = win32ui.CreateDC ()
       hDC.CreatePrinterDC (printer_name)
       printer_size = hDC.GetDeviceCaps (PHYSICAL_WIDTH), hDC.GetDeviceCaps (PHYSICAL_HEIGHT)
       bmp = Image.open (file_name)
       if bmp.size[0] < bmp.size[1]:
         bmp = bmp.rotate (90)
       hDC.StartDoc (file_name)
       hDC.StartPage ()
       dib = ImageWin.Dib (bmp)
       dib.draw (hDC.GetHandleOutput (), (0,0,printer_size[0],printer_size[1]))
       hDC.EndPage ()
       hDC.EndDoc ()
       hDC.DeleteDC ()

def tuto():
            root = tk.Tk()
            root.attributes("-fullscreen",True)
            frame = tk.Frame(root)
            frame.pack()
            helv36 = tkFont.Font(family='Helvetica', size=20, weight=tkFont.BOLD)
            labelExample1= tk.Label(frame, text = "****!WELCOME TO GAREWARD!****",width=35,bg="orange",fg="black",font=helv36)
            labelExample1.pack()
            labelExample11= tk.Label(frame, text = "!!GAIN AS YOU THROW!!",width=35,bg="white",fg="red",font=helv36)
            labelExample11.pack()
            def txt1():
                         tkMessageBox.showinfo("Step 1"," #PUT YOUR WASTE  IN GAREWARD  # GET CODE    ")
            def write_slogan():
                tkMessageBox.showinfo("HI!!!"," HELLO , WELCOME TO GAREWARD*")
                labelExample1= tk.Label(frame, text = "YOUR 3 STEPS TUTORIAL IS HERE : ")
                labelExample1.pack()
                button = tk.Button(frame, 
                           text="STEP 1 ", 
                           fg="black",height = 5, bg = "ORANGE",
                        
                width = 10,command=txt1)
                button.pack()
                def close_window():
                    tkMessageBox.showinfo("THANKYOU!!","BYE!!!!!!")
                    root.destroy()
                def txt2():
                         tkMessageBox.showinfo("Step 2","  #GO TO WEB PORTAL  #CREATE ACCOUNT # LOGIN  ")
                def txt3():
                         tkMessageBox.showinfo("Step 3","  #SCAN QR CODE # GET POINTS #USE POINTS FOR DISCOUNTS  ")
       
                button1=tk.Button(frame, text = "STEP 3", command = txt3, fg="black",height =5, bg = "green",width =10)
                button1.pack(side=tk.RIGHT)
                button2=tk.Button(frame, text = "STEP 2", command = txt2, fg="black",height =5, bg = "WHITE",width =10)
                button2.pack(side=tk.LEFT)
            helv36 = tkFont.Font(family='Helvetica', size=20, weight=tkFont.BOLD)   
            labelExample101= tk.Label(frame, text = "DO YOU NEED TUTORIAL ?",width=35,bg="green",font=helv36,fg="WHITE")
            labelExample101.pack()
            helv36 = tkFont.Font(family='Helvetica', size=20, weight=tkFont.BOLD)
            slogan = tk.Button(frame,
                                   text=" YES",font=helv36,height = 5, bg = "white",
                                            fg = "black",
                      width =15,
                                   command=write_slogan)
            
            def close_window():
                   root.destroy()
            helv36 = tkFont.Font(family='Helvetica', size=20, weight=tkFont.BOLD)
            button10=tk.Button(frame, text = "NO", font=helv36,command = close_window, bg="white",height =5, fg = "black",width =15)
            img3=ImageTk.PhotoImage(Image.open ("C:/Users/DELL/Desktop/DLi/LOGO/other/EXIT (2).jpg"))
            lab3=tk.Label(image=img3)
            slogan.pack(side=tk.LEFT)
            lab3.pack()
            root.config(bg='white')
            button10.pack(side=tk.RIGHT)
            root.mainloop()

         
def qrcode(v):
    s=v
    url = pyqrcode.create(s) 
    url.png("myqr.jpg", scale = 8)
    image= Image.open('myqr.jpg')
    image.show()
    return('Scan the QR code ')
def inpvalue():
        import serial
        import time
        ser = serial.Serial('COM6', 9600)
        time.sleep(0.1)
        data =[]                       
        for i in range(1):
            b = ser.readline()       
            string_n = b.decode()   
            string = string_n.rstrip() 
            flt=string
            if(flt!=''):
               data.append(flt)           
               time.sleep(0.1)          
               ser.close()
               for line in data:
                     g=float(data[0])
                     s=round(g)
                     print(s)
                     return(s)
            else:
                s=0
                return(s)
def display():
       def nof():
                   tkMessageBox.showinfo("  CLEAN INDIA 2020", "COLLECT THE PRINTED TOKEN!!*THANKYOU FOR USING GAREWARD*")
       
                   
                   playsound('C:/Users/DELL/Desktop/DLi/D/MUSIC/TOKEN.mp3'   )
                   printer()
                   root.destroy()
              


       root = tk.Tk()
       root.attributes("-fullscreen",True)
       frame = tk.Frame(root)
       frame.pack()
       img1=ImageTk.PhotoImage(Image.open ("C:/Users/DELL/Desktop/DLi/LOGO/other/a (4).jpg"))
       lab1=tk.Label(image=img1)


       labelExample1= tk.Label(frame, text = "****!     WELCOME TO GAREWARD!  *******!GAIN AS YOU THROW!****",width=80,bg="ORANGE",fg="WHITE")
       labelExample1.pack()
       labelExample2 = tk.Label(frame, text = "####         ... CLEAN INDIA MISSION 2020  ...         #### ",width=80)
       labelExample2.pack()
       lab1.pack()

       button1L=tk.Button(frame, text ="----- GAREWARD ----",fg="YELLOW", bg = "green",width=80)
       button1L.pack()
       helv36 = tkFont.Font(family='Helvetica', size=24, weight=tkFont.BOLD)

       button = tk.Button(frame, 
                              text=" CLICK HERE FOR PRINTED TOKEN ", font=helv36,
                              bg="WHITE",height = 5, fg = "black",
                           
                 width = 30,command=nof)


       button.pack(side=tk.LEFT)

       root.config(bg='black')
       def qrcode1():
           qrcode(A)
           playsound('C:/Users/DELL/Desktop/DLi/D/MUSIC/QR.mp3')
           root.destroy()

           
  
       helv36 = tkFont.Font(family='Helvetica', size=24, weight=tkFont.BOLD)


       buttonQ = tk.Button(frame, 
                              text="CLICK HERE FOR VIRTUAL TOKEN ", 
                              bg="white",height = 5, fg = "black",font=helv36,
                           
                 width = 30,command=qrcode1)

       buttonQ.pack(side=tk.RIGHT)

       root.config(bg='WHITE')
     

       root.mainloop()
DN='D' 
DNN=8
user=0

while (1):
   
    n=inpvalue()
    #n=int(input("ENTER THE WEIGHT IN GRAMS:"))
    if(n==0):
           playsound('C:/Users/DELL/Desktop/DLi/D/MUSIC/WEL.mp3')
    if(n>0):
      tuto()
      user=int(user)
      user+=1
      user="0"+str(user)
      #(user)
      G=n
      if(G>=10 and G<=99):
          G1='00'+str(G)
      elif(G>=100 and G<=999):
          G1='0'+str(G)
      elif(G<10 ):
          G1='000'+str(G)
      else:
         G1=str(G)
      print("WEIGHT IN KG :",(G1))
      datetime_object = datetime.datetime.now()
      datetime_object  = datetime_object .replace( microsecond=0)
      B=str(datetime_object.strftime("%Y"))+str(datetime_object.strftime("%m"))+str(datetime_object.strftime("%d"))
      if(n>=10 and n<=99):
          v=DN+str(DNN)+'00'+str(user)+str(G1)+B
      elif(n>=100and n<=999):
          v=DN+str(DNN)+'0'+str(user)+str(G1)+B
      elif(n<10):
          v=DN+str(DNN)+'000'+str(user)+str(G1)+B
      else:
            v=DN+str(DNN)+str(user)+str(G1)+B
      print(v)
      A='http://localhost/sih/dash/qrdir.php?'+v
      display()
      time.sleep(3)
   
     


      if(user==1):
          break
   
