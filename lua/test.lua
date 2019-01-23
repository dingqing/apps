-- 乘法表
function multipTable( ... )
	local str = ''
	for i=1,9 do
		for j=1,9 do
			res = i*j

			-- 补齐长度
			if string.len(res)<2 then
				res = res..' '
			end

			str = str..i..'*'..j..'='..res..' '
		end

		-- 换行
		if i<9 then
			str = str..'\n'
		end
	end

	print(str)
end
print('乘法表：')
multipTable()

-- 斐波那契数列
function fib(n)
	if n<2 then return 1 end
	return fib(n-2) + fib(n-1)
end
print('斐波那契数列 - 求第n项：')
print(fib(6))