
try:

    hours = int(input('Introduzca el numero de horas:'))
    ratio = float(input('Introduzca el precio/hora: ')) 

    if hours > 40 :
        pay = ratio * 40 + (hours- 40) * (1.5 * ratio)
    else : 
        pay= ratio * hours
    print('Pago: ' ,pay)    
except:
    print('ERROR, por favor, ingresar un valor numerico')
