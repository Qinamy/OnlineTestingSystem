<?php
function search()
{
    $record=array(); //���巵�ؽ��������
    $list = $this->search($this->keyword);//��ͨ�ĸ��ݹؼ��ʲ�ѯ���ݿ�Ĳ��� ����Ͳ��÷�����
    if(is_array($list)&&!empty($list))
    {
        foreach($list as $msg)
        {
            $record[]=array(//���´��룬�����ݿ��в�ѯ���ص������ʽ��Ϊ΢�ŷ�����Ϣ�ܽ��յ�������ʽ����title��description��picurl��url ���΢�Źٷ����ĵ�����
                'title' =>$msg['title'],
                'description' =>$msg['discription'],
                'picurl' => $msg['pic_url'],
                'url' =>$msg['url']);
        }
    }
    return $record;
}

