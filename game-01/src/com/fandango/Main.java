package com.fandango;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;

public class Main {

    public static void main(String[] args) {
        int[] list = new int[]{2, 5, 8, 14, 0};
        System.out.println(Arrays.toString(pairsThatSum(list, 10)));
    }


    public static int[] pairsThatSum(int[] list, int targetSum) {
        Map<Integer, Integer> map = new HashMap<>();

        for (int i = 0; i < list.length; i++) {
            int complement = targetSum - list[i];
            if (map.containsKey(complement)) {
                return new int[]{list[map.get(complement)], list[i]};
            }

            map.put(list[i], i);
        }

        return new int[]{};
    }
}
