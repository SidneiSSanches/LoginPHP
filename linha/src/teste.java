import java.awt.*;
import java.awt.event.*;
public class teste extends Frame
{  
   public static void main(String[] args)
   { new teste();
   }
   
   teste()
   {  super("Tela");
      addWindowListener(new WindowAdapter()
         {public void windowClosing(WindowEvent e){System.exit(0);}});
      setSize(700, 400);
      show();
   }
   public void paint(Graphics g)
   {  
  
  
      g.drawLine(60, 30, 10, 70);
  g.setColor(Color.yellow);
      g.drawLine(10, 70, 10, 140);
  g.setColor(Color.red);
      g.drawLine(120, 140, 10, 140);
  g.setColor(Color.green); 
      g.drawLine(60, 30, 120, 70);
  g.setColor(Color.orange);
      g.drawLine(120, 70, 120, 140);
   }

   
}
