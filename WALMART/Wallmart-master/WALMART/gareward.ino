#include "HX711.h"
HX711 scale;
float calibration_factor = 2230; 
float units;
float ounces;
int i=0;
void setup() {
  Serial.begin(9600);
  scale.begin(5,6);
  scale.set_scale();
  scale.tare(); 

  long zero_factor = scale.read_average(); 
}

void loop() {

  scale.set_scale(calibration_factor);
for(i=0;i<=5;i++)
{
  units = scale.get_units(), 10;
  if (units < 0)
  {
    units = 0.00;
  }
  ounces = units * 0.035274;
  if(units<=0.99)
  { Serial.println("");
  }
  else{
  Serial.print(units);}
  Serial.println();
  break;
}

  if(Serial.available())
  {
    char temp = Serial.read();
    if(temp == '+' || temp == 'a')
      calibration_factor += 1;
    else if(temp == '-' || temp == 'z')
      calibration_factor -= 1;
    
}
}
