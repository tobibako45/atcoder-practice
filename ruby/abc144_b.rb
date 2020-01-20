# n=gets.split.map(&:to_i)

n=gets.strip.to_i

answer = 'No'
for i in 1..9 do
    if n % i == 0 && n / i <= 9
        answer = 'Yes'
    end
end
puts answer

###############
# answer = 'No'
# (1..9).each do |i|
#   if n % i == 0 && n / i <= 9
#     answer = 'Yes'
#   end
# end
# puts answer
