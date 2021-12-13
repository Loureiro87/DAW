
def computepay(hours, ratio) :
    if hours > 40 :
        pay = ratio * 40 + (hours- 40) * (1.5 * ratio)
    else : 
        pay= ratio * hours
    return pay

try:
    hours = int(input('Introduzca el numero de horas:'))
    ratio = float(input('Introduzca el precio/hora: ')) 

    print('Pago: ' ,computepay(hours, ratio))    
except:
    print('ERROR, por favor, ingresar un valor numerico')
