<PRE>
<h2>����������� ������� � ������</h2>
by Max Medvetskiy
last modified: 2005-11-10

������������ Zend 2 Engine �� ��������������� ���������� ��������� ������� (package). 
��� �� ����� �� �������� ������� ����������� ������������ ������ ����� ������� ����� �������� 
����������� � ������������ ���� � ��� ����� ����������� ������ � ������� ������ � PHP.
��� ������� ������� ����������� ��� ���������� ������� � ����������� PEAR.

�������� � ��� ���� ��� ������

forum/User.php
store/User.php

� ������ ���� � ����� ������� ����� ������������� ��� class User {} �� ��������� ��� 

<?highlight_file('code/code1.html') ?>

������ ��� Fatal error: Cannot redeclare class user in...

����� �������� ����� �������� ���������� �������� � ��� ������ ���� � ����� � ������� ����������� 
�����. ����� ������� ���������� ������� �� ����������� ������� ������������ �

<?highlight_file('code/code2.html') ?>

��������� ����� ������ ������� ������ � �������� ����������� ��������� ����.

<h3>����� � PHP5. __autoload()</h3>
������� ��������� ��������� ������� ������ ����� � ����� ��������� �����. ����� ������ 
��� �� ����� �������� � ���� ��� ��������� ������������ ������ ������� ������ reqire_once()
������� ������� �������.

<a href="http://us3.php.net/__autoload">Autoload</a> ������������� ���������� ����� ��� ��� 
������������� ���������� � ������ ���� ���������� ��������� � ������ ������� �� ��� ������������.

��������� �������� ���� � ������ ��������� ������� ����������� ��� ���� ������� �� �����
�������� overloaded ����������� ������� ���

<?highlight_file('code/code3.html') ?>

(DIRECTORY_SEPARATOR � ������ *nix ����� '/')

����� � ������ 

<?highlight_file('code/code4.html') ?>

����� �������������� ������� 
�������� ����� 
forum/User.php � store/User.php

(<a href="mailto:max@engine37.com">�omments/Questions?</a>)

