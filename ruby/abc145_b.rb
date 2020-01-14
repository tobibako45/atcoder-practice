# 一行目、整数
i = gets.chomp.to_i
# ２行目、文字列
s = gets.chomp

# 整数を割る２する
r = i / 2

# 割った数字で、文字列を割る
# arr = s.scan(/.{1,#{r}}/)
arr = s[0, r] # rubyのStringクラス。

# 割った文字列が、２度繰り返しか？
# puts arr[0] == arr[1] ? 'Yes' : 'No'
str = arr + arr
puts s == str ? 'Yes' : 'No'

######
# n = gets.to_i
# s = gets.chomp
# if n.even? && s[0..(n / 2 - 1)] == s[(n / 2)..-1]
#   puts 'Yes'
# else
#   puts 'No'
# end

#############
# N = gets.to_i
# S = gets.chomp
#
# if N.odd?
#     puts 'No'
# else
#     puts S[0..N/2-1] == S[N/2..N] ? 'Yes' : 'No'
# end

