import collections
class Solution:
    # 递归
    def ysfRecursive1(self, arr, m, index=0):
        l=len(arr)
        if l==1:
            print(arr[0],'成为猴王')
        else:
            index=(index+m-1)%l
            del arr[index]
            self.ysfRecursive1(arr,m,index)
    # 两行代码递归
    def ysfRecursive2(self, n, m):
        if n == 1: return n
        return (self.ysfRecursive2(n - 1, m) + m - 1) % n + 1
    # 迭代
    def ysf3(self, arr, m, index=0):
        while len(arr)>1:
            index=(index+m-1)%len(arr)
            del arr[index] #arr.pop(index)
        print(arr[0],'成为猴王')
    # 摒弃递归，每次步长不为k时候都把当前元素弹出并放到队列尾部，从而模拟循环链表结构。
    # 进一步优化，由于列表弹出第一个元素的复杂度较高，可以使用双端队列来进行优化：
    def ysf4(self, arr, m=3, index=1):
        """
        如果开始的位置不是1，则先进行队列变化，然后将3前面的数字append到队列末端，再pop掉3位置的数字
        """
        dq = collections.deque(arr)
        tmp_k = index-1
        while tmp_k:
            dq.append(dq.popleft())
            tmp_k -= 1
        print('变换为新序列：', dq)
        index = 1  # 变换后将从第1个开始
        while len(dq) > 1:  # 当队列长度大于1时，进行队列的pop操作
            if index != m:
                dq.append(dq.popleft())
                index += 1
                print(dq)
            else:
                print('从左端移除：', dq.popleft())
                index = 1
        return '最后的一个数：%s' % dq[0]

if __name__ == '__main__':
    x=Solution()
    # print(x.ysfRecursive2(7,3))
    print(x.ysf4([1,2,3,4,5,6,7],3))
