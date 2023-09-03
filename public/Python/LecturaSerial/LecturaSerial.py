import serial
import requests

# Configura el puerto y la velocidad
puerto = 'COM5'  # Reemplaza con el nombre del puerto correcto
velocidad = 9600

# Abre el puerto serial
ser = serial.Serial(puerto, velocidad)
# URL de la API Laravel donde deseas enviar los datos
api_url = 'http://localhost:8000/serialP'
#csrf_token='eyJpdiI6IjFscG5QbC9RWEtNOE8rYWtzdGN4VkE9PSIsInZhbHVlIjoicjFFMndxdHU4R3R1U3prY1VEVmJVd2tuK05FT3JpL3REaVRWOTA5VE1HemFscFhMQnhDaEVmL3dTMG9lc3M2UWVwTzdFQm1EalI0bmg0bzEzMXFvcjNod0dEOEJibVMzZEszQ2tkc3NqaENyd0NtaTY2ZEV0VzdrdlpSdnRrdWMiLCJtYWMiOiIyZGFhOTUxMWI5N2ZjZWI4ZDI4MzJlZTAxMGMwNjViNTM0YzZkMTY5NWE0ZTA2ZDc5MGVmODI0YTQyMzU5NWVhIiwidGFnIjoiIn0%3D'
try:
    print("Lectura de serial")
    while True:
        # Lee una línea de datos del puerto serial
        linea = ser.readline()
        codigo=str(linea.strip())[2:22]
        print(codigo,"l:",len(codigo))
        # Envia los datos por POST a la API Laravel
        payload = {'data': codigo}  # Define los datos que deseas enviar token: {,'_token':$csrf_token}
        response = requests.post(api_url, json=payload)
        if response.status_code == 200:
            print('Datos enviados con éxito a Laravel:',payload)
        else:
            print('Error al enviar datos a Laravel. Código de estado:', response.status_code)
except KeyboardInterrupt:
    print("Lectura finalizada por el usuario.")
finally:
    ser.close()  # Cierra el puerto serial al finalizar

