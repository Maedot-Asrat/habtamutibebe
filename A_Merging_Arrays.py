lengths=list(map(int, input().split()))
first_arr=list(map(int, input().split()))
second_arr=list(map(int, input().split()))
ans=[]
first_pointer=0
second_pointer=0
while first_pointer<lengths[0] and second_pointer<lengths[1]:
    if first_arr[first_pointer]<second_arr[second_pointer]:
        ans.append(first_arr[first_pointer])
        first_pointer+=1
    else:
        ans.append(second_arr[second_pointer])
        second_pointer+=1
if first_pointer<lengths[0]:
    while first_pointer<lengths[0]:
        ans.append(first_arr[first_pointer])
        first_pointer+=1
if second_pointer<lengths[1]:
    while second_pointer<lengths[1]:
        ans.append(second_arr[second_pointer])
        second_pointer+=1
print(*ans)