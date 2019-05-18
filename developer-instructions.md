To begin, make a LAMP stack to host your website. Follow these instructions to do this on amazon ec2: https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/install-LAMP.html

Next, clone this reapo and do the following:
1. Install [Docker](https://docs.docker.com/install/)

2. Build docker image `docker build -t nima-cpu . -f Dockerfile.cpu`

In order to train remotely on **AWS EC2**

3. Install [Docker Machine](https://docs.docker.com/machine/install-machine/)

4. Install [AWS Command Line Interface](https://docs.aws.amazon.com/cli/latest/userguide/installing.html)

Add 'apache' as a user with rights to change directories, upload files, and run the assessment script.

To finish, download the latest web files in this repository and place them in /var/www/html with the correct security permissions
