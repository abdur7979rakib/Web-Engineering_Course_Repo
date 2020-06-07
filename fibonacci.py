def fib(n):
    a = 0
    b = 1
    print(a)
    print(b)

    for i in range(2, n):
        c = a+b
        a = b
        b = c
        print(c)

x = int(input("Enter the Number: "))
fib(x)


"""a=int(input("Enter the terms: "))
f=0
s=1
print(f)
print(s)
for x in range(2,a):
    next=f+s
    f=s
    s=next
    print(next)"""