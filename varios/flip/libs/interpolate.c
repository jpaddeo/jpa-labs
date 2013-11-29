#include<stdio.h>
#include<math.h>
int main() {
    float x[10],y[15][15];
    int n,i,j;
	
	//no. of items
    printf("Enter n : ");
    scanf("%d",&n);
    printf("X\tY\n");
    for(i = 0;i<n;i++){
            scanf("%f %f",&x[i],&y[i][0]);
    }
    //forward difference table
    for(j=1;j<n;j++)
        for(i=0;i<(n-j);i++)
            y[i][j] = y[i+1][j-1] - y[i][j-1];
    printf("\n***********Forward Difference Table ***********\n");
//display Forward Difference Table
    for(i=0;i<n;i++)
    {
        printf("\t%.2f",x[i]);
        for(j=0;j<(n-i);j++)
            printf("\t%.2f",y[i][j]);
        printf("\n");
    }
    //backward difference table
    for(j=1;j<n;j++)
//for j = 0 initially input is taken so we start from j=1
        for(i=n-1;i>(j-1);i--)
            y[i][j] = y[i][j-1] - y[i-1][j-1];
    printf("\n***********Backward Difference Table ***********\n");
//display Backward Difference Table
    for(i=0;i<n;i++)
    {
        printf("\t%.2f",x[i]);
        for(j=0;j<=i;j++)
            printf("\t%.2f",y[i][j]);
        printf("\n");
    }
return 0;
}