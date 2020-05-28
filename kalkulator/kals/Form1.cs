using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace kals
{
    public partial class Form1 : Form
    {
        
        Double val = 0;
        String text = "";
        bool oper_press = false;
        public Form1()
        {
            InitializeComponent();
            progressBar1.Maximum = 100;

        }

        private void button_click(object sender, EventArgs e)
        {
            
            
            if ((output.Text == "0")||(oper_press))
            {
                output.Clear();
                progressBar1.Step = 5;
            }
            Button button = (Button)sender;
            output.Text = output.Text + button.Text;
            oper_press = false;
            progressBar1.Step = 5;
            progressBar1.PerformStep();



        }

        private void button14_Click(object sender, EventArgs e)
        {
            output.Text = "0";
            progressBar1.Value = 0;

        }

        private void op_pres(object sender, EventArgs e)
        {
            Button button = (Button)sender;
            text = button.Text;
            val = Double.Parse(output.Text);
            oper_press = true;
            progressBar1.Step = 5;
        }

        private void op_res(object sender, EventArgs e)
        {
            progressBar1.Step = 100;
            progressBar1.PerformStep();
            switch (text)
            {
                case "+":
                    output.Text = (val + Double.Parse(output.Text)).ToString();
                    break;
                case "-":
                    output.Text = (val - Double.Parse(output.Text)).ToString();
                    break;
                case "/":
                    output.Text = (val / Double.Parse(output.Text)).ToString();
                    break;
                case "*":
                    output.Text = (val * Double.Parse(output.Text)).ToString();
                    break;
                default:
                    break;
            }
            oper_press = false;
        }

        private void button13_Click(object sender, EventArgs e)
        {
            output.Clear();
            val = 0;
        }

        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
