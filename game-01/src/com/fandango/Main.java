package com.fandango;

import java.util.Arrays;

public class Main {

    public static void main(String[] args) {
        int[] list = new int[]{2, 5, 8, 14, 0};
        System.out.println(Arrays.toString(pairsThatSum(list, 10)));
    }


    public static int[] pairsThatSum(int[] list, int targetSum) {
        Arrays.sort(list);

        int low = 0;
        int high = list.length - 1;
        int[] result = new int[2];

        while (low < high) {
            if (list[low] + list[high] == targetSum)
                return new int[]{list[low], list[high]};

            if (list[low] + list[high] < targetSum)
                low++;

            else high--;
        }

        return result;
    }
}
