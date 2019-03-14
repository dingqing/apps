from urllib.request import requests
import time

class My_job():
	"""docstring for Solution"""
	def __init__(self, arg):
		super(Solution, self).__init__()
		self.arg = arg

	def get_content(self):
		server_url = 'https://wxis.91160.com/wxis/sch/main.do?r=1552573769266&unit_id=21&dep_id=1738&doc_id=14700'
	    # 医院发布号源规则是提前一周，每天有可能抢到的号日期为从明天开始的连续8天，
		try:
	    	# 为尽量抢到早号，又不会造成请求太多，决定请求前5页

		    # 每页结果若html中有正常可以点击的亮色“预约”按钮，则把所在行的医生名字和日期加入返回结果。
		    
		    # 如果因为优化了网络请求造成结果里的日期混乱，那么最后要把结果将日期早的放在前面

		    # 需要记录是否已经抢到号，但是想获得更早的，然后什么时候程序终止？
		    time.time()
			days = range()
			time.strftime("%Y-%m-%d", time.localtime(1552568282))
			params
			requests.post(server_url, data={})
		except Exception as e:
			raise e
	def do_push(self, msg_content):
		push_url = 'SCU46410T5de8d3d811345aa43a3345c7ccd5e53c5c8a2f7ebc506'
        reponse = requests.post(server_url, data={"text":'抢到号了', "desp":msg_content})
        if reponse.json()['errno'] == 0:
        	# log: 发送成功
        else:
        	# log: 发送失败，内容附上reponse.json()['errmsg']

def main():
	Scheduler =  BlockingScheduler()
	job =  My_job()

	# log: start
	Scheduler.add_job(job, 'cron', ).start()