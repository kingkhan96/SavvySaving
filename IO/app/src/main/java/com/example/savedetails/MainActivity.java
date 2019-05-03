package com.example.savedetails;


import android.os.Build;
import android.os.Bundle;
import android.support.annotation.RequiresApi;
import android.support.v7.app.AppCompatActivity;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Types;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class MainActivity extends AppCompatActivity {

    int amount;
    int savings;

    int passValid = 7;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    /**
     *
     * @author Arshad Khan
     */

    @RequiresApi(api = Build.VERSION_CODES.KITKAT)
    public void saveDetails() throws IOException {

        if (passValid >= 0) {

            File victor = new File("data.txt");
            FileWriter fw = new FileWriter(Details);
            try (PrintWriter pw = new PrintWriter(fw)) {
                pw.println(amount);
                pw.println(savings);
                DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
                Date date = new Date();
                pw.println(dateFormat.format(date));
                pw.close();
            }
        }
    }
}
