# 週の配列
week = {'SUN' => 7, 'MON' => 6, 'TUE' => 5, 'WED' => 4, 'THU' => 3, 'FRI' => 2, 'SAT' => 1}
# 受け取り・表示
# p s = gets.chomp
puts week[gets.chomp]

#### indexメソッドは、配列から引数objと同じ要素を探し、その位置を整数で返します（1番目が0、2番目が1、...）。要素が見つからないときは、nilを返します。

#### 別解1
list = [ 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT' ].reverse
puts list.index(gets.chop) + 1


#### 別解2
week = ["SUN","MON","TUE","WED","THU","FRI","SAT"]
S = gets.chomp
puts 7- week.index(S)

#### 別解3
p 7-['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'].index(gets.chomp)

#### 別解4
S = gets.chomp
WEEK = %w(SUN MON TUE WED THU FRI SAT)
puts 7 - WEEK.index(S)
