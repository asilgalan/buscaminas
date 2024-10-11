package campominas;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class CampoMinas {

    public static void main(String[] args) throws FileNotFoundException {
        File archivo = new File("src/campominas/datos");
        Scanner entrada = new Scanner(archivo);

        int filas = 0;
        int columnas = 0;
        int[][] matriz;
        int totalizadorUnosDentroMiniMatriz = 0;
        int totalizadorMatricesQueCumplen = 0;

        columnas = entrada.nextInt();
        filas = entrada.nextInt();

        while ((columnas != 0) && (filas != 0)) {

            matriz = new int[filas][columnas];
            entrada.useDelimiter("");
            entrada.nextLine();
            //recorrido de llenado
            for (int i = 0; i < matriz.length; i++) {
                for (int j = 0; j < matriz[i].length; j++) {
                    matriz[i][j] = entrada.nextInt();
                }
                entrada.nextLine();
            }
            //recorrido de comprobación
            /*En este recorrido se empieza en i=1, j = 1 y se llega hasta length -1 en filas y columnas 
            para evitar las posiciones que están en el borde perimetral de la matriz:
            * * * * *
            * d d d * En esta matriz evitamos el borde perimetral y nos centramos en los datos "d"
            * d d d *
            * * * * *             
             */
 /*A continuación vamos mostrando la que sería la posición central 
            (mostramos los índices de la matriz original en los que se situaría dicha posición central--> las letras "d" del dibujo anterior)
            de un cuadrado de dimensiones 3x3 en el que tenemos que mirar alrededor para comprobar celdas vacías 
            (d con valor 0) y contabilizar hasta 6 (una vez conseguido el valor 6 hacemos break)*/

 /*Además de  decir la posición central, mostramos los índices implicados en cada cuadrado.
            Se puede comprobar cómo los índices mostrados son los que rodean en la matriz original a la posición central mostrada
            * * *       * * *       * * *
            * d d       d d d        d d *
            * d d       d d d        d d *
            
            * d d       d d d        d d *
            * d d       d d d        d d *
            * * *       * * *       * * *            
            
            
             */
            for (int i = 1; i < matriz.length - 1; i++) {//i = 1 hasta filas de matriz - 1
                for (int j = 1; j < matriz[i].length - 1; j++) {//j = 1 hasta columnas de matriz - 1
                    System.out.println("Posicion central del cuadrado: " + i + " " + j);
                    //ojo con el igual del for
                    for (int l = (i - 1); l <= (i + 1); l++) {
                        for (int m = (j - 1); m <= (j + 1); m++) {
                            System.out.print("posicion: " + l + " " + m + " ");
                        }
                        System.out.println("");
                    }
                    for (int l = (i - 1); l <= (i + 1); l++) {
                        for (int m = (j - 1); m <= (j + 1); m++) {
                            System.out.print(" " + matriz[l][m] + " ");
                        }
                        System.out.println("");
                    }

                }
                System.out.println("");
            }
            /*REPETIMOS TODO EL CÓDIGO ANTERIOR AHORA CENTRÁNDONOS EN 
            RESOLVER POSICIÓN CENTRAL = 0 Y CONTABILIZAR AL MENOS 6 VECES UN 1*/
            System.out.println("RESOLVER POSICIÓN CENTRAL = 0 Y CONTABILIZAR AL MENOS 6 VECES UN 1:");
            for (int i = 1; i < matriz.length - 1; i++) {//i = 1 hasta filas de matriz - 1
                for (int j = 1; j < matriz[i].length - 1; j++) {//j = 1 hasta columnas de matriz - 1
                    /*AHORA SÓLO DIBUJAMOS LAS MATRICES DE POSICIÓN CENTRAL == 0*/
                    if (matriz[i][j] == 0) {
                        for (int l = (i - 1); l <= (i + 1); l++) {
                            for (int m = (j - 1); m <= (j + 1); m++) {
                                /*nos podríamos saltar la comprobación == 1 de la posición central de cada minimatriz*/
                                if (matriz[l][m] == 1) {
                                    totalizadorUnosDentroMiniMatriz++;//Si totalizador es 6 podemos hacer break a nivel de comprobación de matriz
                                }

                            }

                        }
                        if (totalizadorUnosDentroMiniMatriz >= 6) {
                            totalizadorMatricesQueCumplen++;
                        }
                        for (int l = (i - 1); l <= (i + 1); l++) {
                            for (int m = (j - 1); m <= (j + 1); m++) {
                                System.out.print(" " + matriz[l][m] + " ");
                            }
                            System.out.println("");
                        }

                        System.out.println("Hemos encontrado este número de 1: " + totalizadorUnosDentroMiniMatriz);
                    }//FINAL DEL IF QUE COMPRUEBA LA POSICIÓN CENTRAL == 0
                    
                    totalizadorUnosDentroMiniMatriz = 0;

                }
                System.out.println("");
            }
            System.out.println("número de minimatrices que cumplen con un 0 central y al menos 6 1 alrededor: " + totalizadorMatricesQueCumplen);

            entrada.useDelimiter("\\s");

            columnas = entrada.nextInt();
            filas = entrada.nextInt();
            totalizadorMatricesQueCumplen = 0;
        }
    }

}
