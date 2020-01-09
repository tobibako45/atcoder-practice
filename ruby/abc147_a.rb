# a,b,c = gets.chomp.split(" ").map(&:to_i)
a,b,c = gets.split(" ").map(&:to_i)
puts 21<a+b+c ? 'bust':'win'

# injectで足す
puts gets.split.map(&:to_i).inject(:+)<22 ? "win" : "bust"
