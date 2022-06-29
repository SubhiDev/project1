.social-buttons a{
  display: inline-flex;
  text-decoration: none;
  font-size: 18px;
  width: 60px;
  height: 60px;
  color: #fff;
  justify-content: center;
  align-items: center;
  position: relative;
  margin: 0 8px;
}

.social-buttons a::before{
  content: "";
  position: absolute;
  width: 60px;
  height: 60px;
  background: linear-gradient(45deg,#22a6b3,#30336b);
  border-radius: 50%;
  z-index: -1;
  transition: 0.3s ease-in;
}

.social-buttons a:hover::before{
  transform: scale(0);
}

.social-buttons a i{
  transition: 0.3s ease-in;
}

.social-buttons a:hover i{
  background: linear-gradient(45deg,#22a6b3,#30336b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: scale(2.2);
}