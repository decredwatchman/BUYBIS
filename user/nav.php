    <style>
        .nav-bar {
          padding: 10px;
          background-color: #007bff;
          color: white;
          
      }
      
      .nav-section {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 5px;
      }
      
      .logoo {
          font-size: 25px;
          font-weight: 600;
      }
      
      .con1 {
          display: flex;
      }
      
      .list {
          padding: 8px 15px;
          margin: 0px 10px;
          border-radius: 3px;
          background-color: white;
      }
      
      .items {
          text-decoration: none;
          font-size: 14px;
        font-weight:bold;
          text-decoration: none;
          font-weight: 500;
      }
      .menu-item{
        width: 25px;
        background-color: white;
        height: 3px;
        margin-top: 4px;
        margin-bottom: 4px;
      }
      .menu{
        display: none;
      }
      
      .section1 {
          padding: 20px;
    
      }
      .con2{
        display:none;
      }
      
    @media screen and (max-width:800px){
      .list{
        display: none;

      }
      .tt{
        padding: 8px 15px;
          margin: 0px 10px;
          border-radius: 3px;
          background-color: white;
      }
      .con2 {
          display: flex;
          flex-direction:column;
          position: absolute;
          margin-top:50px;
          right:30px;
          width:100%;
          padding-left:20px;
          left:2;
      }
      .menu{
        display: block;
      }
     
    }
      
      </style>
      <div class="nav-bar">
        <div class="nav-section">
              <div class="con1">
                    <span class="logoo">Buybis</span>
              </div>
              <div class="con1">   
                
                 <div class="tt"><a href="#" class="items">LOG OUT</a></div>
                    
                
                    <div class="list"><a href="index" class="items">HOME</a></div>
                <div class="list"><a href="exchange" class="items">TRADE</a></div>
                <div class="list"><a href="dashboard" class="items">WALLET</a></div>
                <div class="list"><a href="profile" class="items">PROFILE</a></div>
                <div class="list"><a href="#" class="items">LOG OUT</a></div>
                <!-- <div class="list  yellow"><a href="#" class="items yellow">Deposit</a></div> -->
              

              </div>
        </div>
    </div>

    <!-- moilenav -->
    <nav class="mynav">
        <span><a class="nav-links" href="index"><img height="30px" style="display: block; ;" src="assets/svg/home.svg"></i></a></span>
       <span><a class="nav-links" href="exchange"><img height="30px" style="display: block; ;" src="assets/svg/change.svg"></i></a></span>
       <span><a class="nav-links" href="dashboard"><img height="30px" style="display: block; ;" src="assets/svg/wallet.svg"></i></a></span>
       <span><a class="nav-links" href="profile"><img height="30px" style="display: block; ;" src="assets/svg/user.svg"></i></a></span>
    </nav>
    <!-- ends here -->