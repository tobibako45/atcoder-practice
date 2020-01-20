a,b,k = gets.split.map(&:to_i)

#### 1
t = [a,k].min
a -= t
k -= t
t = [b,k].min
b -= t
puts [a,b]*" "

#### 2
d = a
a = [a - k, 0].max
k = [k - d, 0].max
b = [b - k, 0].max
print("#{a} #{b}\n")
puts [a,b]*" "
