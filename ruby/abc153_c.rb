n,k=gets.split.map(&:to_i)
monsters=gets.split.map(&:to_i)
m = monsters.sort.reverse

# m.slice!(0, k)
# puts m.inject(:+)

k.times { m.shift }
# 0のときも対応
puts m.length == 0 ? 0 : m.inject(:+)


### shift
# a1 = [1, 2, 3, 4, 5]
# a1.shift()
# print a1 # [2, 3, 4, 5]
#
# a2 = [1, 2, 3, 4, 5]
# a2.shift(2)
# print a2 # [3, 4, 5]


########################
# n,k = gets.split.map(&:to_i)
# h = gets.split.map(&:to_i)
# h.sort!.reverse!
#
# k.times { h.shift }
# puts h.length == 0 ? 0 : h.inject(:+)

