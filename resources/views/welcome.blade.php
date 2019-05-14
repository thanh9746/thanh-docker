<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <div class="p-3 mb-2 bg-success text-white text-center"><strong>Tìm hiểu về docker</strong></div>
        <dl class="row">
            <hr>
            <dt class="col-sm-3">
            Docker là gì? </dt>
            <dd class="col-sm-9">Docker là một nền tảng để cung cấp cách để building, deploying và running ứng dụng một
                cách dễ dàng trên nền tảng ảo hóa.
                <br>
                
                Nó là một công cụ tạo môi trường được “đóng gói” (còn gọi là Container) trên máy tính mà không làm tác
                động tới môi trường hiện tại của máy, môi trường trong Docker sẽ chạy độc lập.
                <hr>
            </dd>

            <dt class="col-sm-3">Docker images</dt>
            <dd class="col-sm-9">
                <p>Mỗi khi bạn muốn chạy ứng dụng Docker là thì bạn cần một cái image, cái image này có thể là HĐH
                    Centos hoặc Linux, đã cài sẵn các ứng dụng PHP, Nginx</p>
                <hr>
            </dd>

            <dt class="col-sm-3">Container là gì?</dt>
            <dd class="col-sm-9">Thế Container là gì, nó là một giải pháp để chuyển giao phần mềm một cách đáng tin cậy giữa các môi trường máy tính khác nhau bằng cách:
            <br>
            <li>
            Tạo ra một môi trường chứa mọi thứ mà phần mềm cần để có thể chạy được.
            </li>
            <li>
            Không bị các yếu tố liên quan đến môi trường hệ thống làm ảnh hưởng tới.
            </li>
            <li>
            Cũng như không làm ảnh hưởng tới các phần còn lại của hệ thống.
            </li>
            <br>
            <p>
            Bạn có thể hiểu là ruby, rails, mysql ... kia được bỏ gọn vào một hoặc nhiều cái thùng (container), ứng dụng của bạn chạy trong những chiếc thùng đó, đã có sẵn mọi thứ cần thiết để hoạt động, không bị ảnh hưởng từ bên ngoài và cũng không gây ảnh hưởng ra ngoài.</p>
            <p>
            Các tiến trình (process) trong một container bị cô lập với các tiến trình của các container khác trong cùng hệ thống tuy nhiên tất cả các container này đều chia sẻ kernel của host OS (dùng chung host OS).
            </p>
            <p>
            Đây một nền tảng mở dành cho các lập trình viên, quản trị hệ thống dùng để xây dựng, chuyển giao và chạy các ứng dụng dễ dàng hơn. Ví dụ, bạn có một app java, bạn sẽ không cần cài đặt JDK vào máy thật để chạy app đó, chỉ cần kiếm container đã được setting tương ứng cho app về, bật nó lên, cho app chạy bên trong môi trường container đó, vậy là ok. Khi không sài nữa thì tắt hoặc xóa bỏ container đó đi, không ảnh hưởng gì tới máy thật của bạn.
            </p>
                <hr>
            </dd>

            <dt class="col-sm-3 text-truncate">Dùng docker có gì tốt?</dt>
            <dd class="col-sm-9">

                <li>
                    <strong>Ease of use:</strong>Docker rất dễ cho mọi người sử dụng từ developers, systems admins,
                    architects…v…v.. nó tận dụng lợi thế của container để build, test nhanh chóng. Có thể đóng gói ứng
                    dụng trên laptop của họ và chạy trên public cloud, private cloud..v.v… Câu thần chú là “Build once,
                    run anywhere”.
                </li>
                <br>
                <li>
                    <strong>Speed: </strong>Docker container rất nhẹ và nhanh, bạn có thể tạo và chạy docker container
                    trong vài giây so sánh với VMs thì mỗi lần chạy VMs cần rất nhiều thời gian khởi động.
                </li>
                <br>
                <li>
                    <strong>DockerHub: </strong>là một “app store for docker images”. trên DockerHub có hàng ngàn public
                    images được tạo bởi cộng đồng. Dễ dàng tìm thấy những image mà bạn cần và chỉ cần pull về và sử dụng
                    với một số sửa đổi nhỏ.
                </li>
                <br>
                <li>
                    <strong>Modularity and Scalability:</strong> Bạn có thể chia nhỏ những chức năng của ứng dụng thành
                    các container riêng lẻ. Ví dụng Database chạy trên một container và Redis cache có thể chạy trên một
                    container khác trong khi ứng dụng Node.js lại chạy trên một cái khác nữa. Với Docker, rất dễ để liên
                    kết các container với nhau để tạo thành một ứng dụng, làm cho nó dễ dàng scale, update các thành
                    phần độc lập với nhau.
                </li>
                <hr>

            </dd>

            <dt class="col-sm-3">Docker khác vagrant ở đâu?</dt>
            <dd class="col-sm-9">

                <p>
                    Máy ảo Vagrant cung cấp Kernel-based security separation. Việc tách biệt này làm cho các máy
                    ảo ít gặp rủi ro về security hơn so với container. Nhưng các container Docker rất nhẹ. Chúng
                    sử dụng ít tài nguyên hơn và thực thi nhanh hơn. Vì vậy, bạn có thể có nhiều hơn một
                    container trên một máy chủ duy nhất so với các máy ảo. Ngoài ra, việc start và stop
                    container là gần như tức thời so với máy ảo. Các máy ảo phải đi qua toàn bộ chu kỳ khởi động
                    BIOS và Hệ điều hành.
                </p>
                <p>Nhờ vào security separation của VM, khi có failure xảy ra thì không bị ảnh hưởng đến các phần
                    khác. Còn đối với container, chúng chia sẻ các tài nguyên và có thể có hiệu ứng fail 1 cách
                    dây chuyền. Ngoài ra, các mối đe dọa an ninh của container có thể chạm đến được cả kernel
                    của hệ điều hành máy chủ.</p>
                <p>
                    Tuy nhiên, tốc độ thực thi và tính gọn nhẹ của container làm cho Docker rất hấp dẫn để phát
                    triển. Với kiến trúc microservice, container có thể hoạt động tốt vì các yếu tố rủi ro được
                    giảm thiểu thông qua việc sử dụng các microservices. Ngoài ra, những nổ lực nhằm cải tiến
                    Docker bảo mật hơn càng ngày càng được đẩy mạnh.
                </p>

            </dd>
            <dt class="col-sm-3">Docker-compose là gì?</dt>
            <dd class="col-sm-9">
                Docker compose là một công cụ tuyệt vời hỗ trợ cài đặt nhiều container và thiết lập các cấu hình cho các
                container. Docker compose chạy theo các cấu hình trong docker-compose.yml.
                <hr>
            </dd>
            <dt class="col-sm-3">Docker-compose có gì tốt?</dt>
            <dd class="col-sm-9">
                Việc quản lý Docker trên một hệ thống lớn với rất nhiều các containers khác nhau sẽ rất phức tạp và khả năng sinh ra nhiều lỗi. (Ví như việc phải cùng lúc liên kết Server với nhiều Database backend và các service riêng rẽ trên môi trường dev và sau đó chuyển qua staging/production)
                Để khắc phục vấn đề này, Docker đã đưa ra một công cụ rất hữu ích đấy là Docker Compose.
                <hr>
            </dd>
            <dt class="col-sm-3">Mô tả khái quát 1 file cấu hình docker compose</dt>
            <dd class="col-sm-9">
            <pre class="bg-dark text-warning p-2 small"><span class="text-white-50"># VIẾT THEO CÚ PHÁP YAML, CHÚ Ý CHÍNH XÁC KHOẢNG TRẮNG ĐẦU CÁC DÒNG</span>

version: "3"                      <span class="text-white-50"># chọn viết theo bản 3 docs.docker.com/compose/compose-file/</span>

services:                         <span class="text-white-50"># CÁC DỊCH VỤ (CONTAINER) NĂM TRONG services</span>
<hr>  pro-memcached:                  <span class="text-white-50"># (((1))) BẮT ĐẦU TẠO DỊCH VỤ THỨ NHẤT</span>
    image: "memcached:latest"     <span class="text-white-50"># Image tạo ra dịch vụ</span>
    container_name: c-memcached01 <span class="text-white-50" "=""># Tên container khi chạy</span>
    restart: always
    hostname: memcached
    networks:
      - my-network                <span class="text-white-50"># nối vào mạng my-network (tạo mạng này ở dưới)</span>
    command:
      - "--conn-limit=2048"       <span class="text-white-50"># Giới hạn kết nối là 2048</span>
      - "--memory-limit=2048"     <span class="text-white-50"># Giới hạn cho phép dùng tới 4096 MB bộ nhớ làm cache</span>
<hr>  xtlab-apache:                   <span class="text-white-50"># (((2))) TẠO DỊCH VỤ HTTPD</span>
    image: "httpd:version2"       <span class="text-white-50"># sử dụng image custome lại ở trên để tạo container</span>
    container_name: c-httpd01     <span class="text-white-50"># tên khi chạy container HTTPD</span>
    restart: always
    hostname: httpd01
    networks:
      - my-network
    ports:
      - "8080:80"                 <span class="text-white-50"># Mở cổng 8080 public, ánh xạ vào 80</span>
      - "443:443"

    volumes:                      <span class="text-white-50"># Ánh xạ thự mục vào container</span>
      - dir-site:/home/sites/     <span class="text-white-50"># Bind ổ đĩa - dir-site</span>
<hr>  xtlab-mysql:                      <span class="text-white-50"># (((3))) TẠO DỊCH VỤ MYSQL</span>
    image: "mysql:latest"
    container_name: mysql-product
    restart: always
    hostname: mysql01
    networks:
      - my-network
    environment:
      MYSQL_ROOT_PASSWORD: abc123   <span class="text-white-50">#Thiết lập password</span>
    volumes:
      - /mycode/db:/var/lib/mysql  <span class="text-white-50"># thư mục lưu DB</span>
      - /mycode/db/my.cnf:/etc/mysql/my.cnf  <span class="text-white-50"># ánh xạ file cấu hình</span>
<hr>  xtlab-php:                         <span class="text-white-50"># (((4))) TẠO DỊCH VỤ PHP</span>
    image: "php:version2"
    container_name: php-product      <span class="text-white-50"># tên container</span>
    hostname: php01
    restart: always
    networks:
      - my-network
    volumes:
      - dir-site:/home/sites/        <span class="text-white-50"># Bind ổ đĩa - dir-site</span>

<hr>networks:                             <span class="text-white-50"># TẠO NETWORK</span>
  my-network:
    driver: bridge
<hr>volumes:                              <span class="text-white-50"># TẠO Ổ ĐĨA</span>
  dir-site:                           <span class="text-white-50"># ổ đĩa này lưu dữ liệu ở /mycode/</span>
    driver_opts:
      device: /mycode/                <span class="text-white-50"># Hãy đảm bảo có thư mục /mycode/default</span>
      o: bind
</pre>
            </dd>
        </dl>
    </div>
    </body>
</html>
