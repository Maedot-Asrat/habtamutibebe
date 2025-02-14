n= int(input())
nums= list(map(int,input().split()))
i=0
while i< len(nums)-1:
    if (nums[i]+ nums[i+1]) %2 ==1:
        nums[i],nums[i+1]=nums[i+1],nums[i]
        i+=2
        continue
    i+=1
print(*nums)