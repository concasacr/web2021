<?php 
  $macro    = ( isset($_POST['Macro']) ) ? $_POST['Macro'] : '';
  $proyecto = ( isset($_POST['Proyecto']) ) ? $_POST['Proyecto'] : '';

if ( $macro=='Campo-Real'){

echo '<div class="form-group  form-group-lg">';

    if ($proyecto=='9-10'){  
    ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Torre</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
            <option value="L">L</option>
        </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Piso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
          <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      </div>
    </div>
    <?php } // End if 9-10 ?>


    <?php if ($proyecto=='6-26'){  ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Torre</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
        </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Piso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
         <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      </div>
    </div>
    <?php } // End if 6-26 ?>
    <?php if ($proyecto=='villas_del_campo'){  ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Torre</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
        </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Piso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
          <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      </div>
    </div>
    <?php } // End if villas_del_campo ?>
    <?php if ($proyecto=='valle_escondido'){  ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Seleccione</option>
            <option value="0">0</option>
            <option value="1">1</option>
          </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Seleccione</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
          <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Seleccione</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
      </div>
    </div>
    <?php } // End if valle_escondido ?>
    <?php if ($proyecto=='vista_real'){  ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
           <select name="tower" id="tower" class="form-control" required>
              <option value="">Torre</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
              <option value="G">G</option>
          </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Piso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
          <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      </div>
    </div>
    <?php } // End if vista_real ?>
    <?php if ($proyecto=='paso_real'){  ?>
    <div class="row">
      <div class="col-xs-4 col-md-4">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Torre</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
        </select>
      </div>
       <div class="col-xs-4 col-md-4">
          <select name="floor" id="floor" class="form-control" required>
            <option value="">Piso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
      </div>
      <div class="col-xs-4 col-md-4">
          <select name="apartments" id="apartments" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      </div>
    </div>
    <?php } // End if paso_real ?>
    <?php if ($proyecto=='bosque_real'){  ?>
    <div class="row">
      <div class="col-xs-6 col-md-6">
          <select name="tower" id="tower" class="form-control" required>
            <option value="">Torre</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
      </div>
      <div class="col-xs-6 col-md-6">
        <select name="floor" id="floor" class="form-control" required>
            <option value="">Apto</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
          </select>
      </div>
    </div>
    <?php } // End if bosque_real ?>
    <?php if ($proyecto=='campo_alto'){  ?>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group  form-group-lg">
            <div class="row">
              <div class="col-md-12"> <input type="text" class="form-control" id="number_home_apto" name="number_home_apto" placeholder="# Casa o Apto" required> </div>
            </div>
          </div>
      </div>
    </div>
    <?php } // End if campo_alto ?>
    <?php if ($proyecto=='vista_del_lago'){  ?>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group  form-group-lg">
            <div class="row">
              <div class="col-md-12"> <input type="text" class="form-control" id="number_home_apto" name="number_home_apto" placeholder="# Casa o Apto" required> </div>
            </div>
          </div>
      </div>
    </div>
    <?php } // End if vista_del_lago ?>
<?php 

echo '</div>'; 

} // End if Macro Campo Real

?>


<?php

if ($macro=='Otros-Proyectos'){

echo '<div class="form-group  form-group-lg">';

?>
<div class="row">
  <div class="col-md-12">
    <div class="form-group  form-group-lg">
        <div class="row">
          <div class="col-md-12"> <input type="text" class="form-control" id="number_home_apto" name="number_home_apto" placeholder="# Casa" required> </div>
        </div>
      </div>
  </div>
</div>
<?php 

echo '</div>'; 

} // End if Macro Otros Proyectos

?>


<?php

if ($macro=='Terrazas-Norte'){

echo '<div class="form-group  form-group-lg">';

?>
<div class="row">
  <div class="col-md-12">
    <select name="floor" id="floor" class="form-control" required>
         <option value=""># Casa</option>
         <option value="TN-1">1</option>
         <option value="TN-2">2</option>
         <option value="TN-3">3</option>
         <option value="TN-4">4</option>
         <option value="TN-5">5</option>
         <option value="TN-6">6</option>
         <option value="TN-7">7</option>
         <option value="TN-8">8</option>
         <option value="TN-9">9</option>
         <option value="TN-10">10</option>
         <option value="TN-11">11</option>
         <option value="TN-12">12</option>
         <option value="TN-13">13</option>
         <option value="TN-14">14</option>
         <option value="TN-15">15</option>
         <option value="TN-16">16</option>
         <option value="TN-17">17</option>
         <option value="TN-18">18</option>
         <option value="TN-19">19</option>
         <option value="TN-20">20</option>
         <option value="TN-21">21</option>
         <option value="TN-22">22</option>
         <option value="TN-23">23</option>
         <option value="TN-24">24</option>
         <option value="TN-25">25</option>
         <option value="TN-26">26</option>
         <option value="TN-27">27</option>
         <option value="TN-28">28</option>
         <option value="TN-29">29</option>
         <option value="TN-30">30</option>
         <option value="TN-31">31</option>
         <option value="TN-32">32</option>
         <option value="TN-33">33</option>
         <option value="TN-34">34</option>
         <option value="TN-35">35</option>
         <option value="TN-36">36</option>
         <option value="TN-37">37</option>
         <option value="TN-38">38</option>
         <option value="TN-39">39</option>
         <option value="TN-40">40</option>
         <option value="TN-41">41</option>
         <option value="TN-42">42</option>
         <option value="TN-43">43</option>
         <option value="TN-44">44</option>
         <option value="TN-45">45</option>
         <option value="TN-46">46</option>
         <option value="TN-47">47</option>
         <option value="TN-48">48</option>
         <option value="TN-49">49</option>
         <option value="TN-50">50</option>
         <option value="TN-51">51</option>
         <option value="TN-52">52</option>
         <option value="TN-53">53</option>
         <option value="TN-54">54</option>
         <option value="TN-55">55</option>
         <option value="TN-56">56</option>
         <option value="TN-57">57</option>
         <option value="TN-58">58</option>
         <option value="TN-59">59</option>
         <option value="TN-60">60</option>
         <option value="TN-61">61</option>
         <option value="TN-62">62</option>
         <option value="TN-63">63</option>
         <option value="TN-64">64</option>
         <option value="TN-65">65</option>
         <option value="TN-66">66</option>
         <option value="TN-67">67</option>
         <option value="TN-68">68</option>
         <option value="TN-69">69</option>
         <option value="TN-70">70</option>
         <option value="TN-71">71</option>
         <option value="TN-72">72</option>
         <option value="TN-73">73</option>
         <option value="TN-74">74</option>
         <option value="TN-75">75</option>
         <option value="TN-76">76</option>
         <option value="TN-77">77</option>
         <option value="TN-78">78</option>
         <option value="TN-79">79</option>
         <option value="TN-80">80</option>
         <option value="TN-81">81</option>
         <option value="TN-82">82</option>
         <option value="TN-83">83</option>
         <option value="TN-84">84</option>
         <option value="TN-85">85</option>
         <option value="TN-86">86</option>
         <option value="TN-87">87</option>
         <option value="TN-88">88</option>
         <option value="TN-89">89</option>
         <option value="TN-90">90</option>
         <option value="TN-91">91</option>
         <option value="TN-92">92</option>
         <option value="TN-93">93</option>
         <option value="TN-94">94</option>
         <option value="TN-95">95</option>
         <option value="TN-96">96</option>
         <option value="TN-97">97</option>
         <option value="TN-98">98</option>
         <option value="TN-99">99</option>
         <option value="TN-100">100</option>
         <option value="TN-101">101</option>
         <option value="TN-102">102</option>
         <option value="TN-103">103</option>
         <option value="TN-104">104</option>
         <option value="TN-105">105</option>
         <option value="TN-106">106</option>
         <option value="TN-107">107</option>
         <option value="TN-108">108</option>
         <option value="TN-109">109</option>
         <option value="TN-110">110</option>
         <option value="TN-111">111</option>
         <option value="TN-112">112</option>
         <option value="TN-113">113</option>
         <option value="TN-114">114</option>
         <option value="TN-115">115</option>
         <option value="TN-116">116</option>
         <option value="TN-117">117</option>
         <option value="TN-118">118</option>
         <option value="TN-119">119</option>
         <option value="TN-120">120</option>
         <option value="TN-121">121</option>
         <option value="TN-122">122</option>
         <option value="TN-123">123</option>
         <option value="TN-124">124</option>
         <option value="TN-125">125</option>
         <option value="TN-126">126</option>
         <option value="TN-127">127</option>
         <option value="TN-128">128</option>
         <option value="TN-129">129</option>
         <option value="TN-130">130</option>
         <option value="TN-131">131</option>
         <option value="TN-132">132</option>
         <option value="TN-133">133</option>
         <option value="TN-134">134</option>
         <option value="TN-135">135</option>
         <option value="TN-136">136</option>
         <option value="TN-137">137</option>
         <option value="TN-138">138</option>
         <option value="TN-139">139</option>
         <option value="TN-140">140</option>
         <option value="TN-141">141</option>
         <option value="TN-142">142</option>
         <option value="TN-143">143</option>
         <option value="TN-144">144</option>
         <option value="TN-145">145</option>
         <option value="TN-146">146</option>
         <option value="TN-147">147</option>
         <option value="TN-148">148</option>
         <option value="TN-149">149</option>
         <option value="TN-150">150</option>
         <option value="TN-151">151</option>
         <option value="TN-152">152</option>
         <option value="TN-153">153</option>
         <option value="TN-154">154</option>
         <option value="TN-155">155</option>
         <option value="TN-156">156</option>
         <option value="TN-157">157</option>
         <option value="TN-158">158</option>
         <option value="TN-159">159</option>
         <option value="TN-160">160</option>
         <option value="TN-161">161</option>
         <option value="TN-162">162</option>
         <option value="TN-163">163</option>
         <option value="TN-164">164</option>
         <option value="TN-165">165</option>
         <option value="TN-166">166</option>
         <option value="TN-167">167</option>
         <option value="TN-168">168</option>
         <option value="TN-169">169</option>
         <option value="TN-170">170</option>
         <option value="TN-171">171</option>
         <option value="TN-172">172</option>
         <option value="TN-173">173</option>
         <option value="TN-174">174</option>
         <option value="TN-175">175</option>
         <option value="TN-176">176</option>
         <option value="TN-177">177</option>
         <option value="TN-178">178</option>
         <option value="TN-179">179</option>
         <option value="TN-180">180</option>
         <option value="TN-181">181</option>
         <option value="TN-182">182</option>
         <option value="TN-183">183</option>
         <option value="TN-184">184</option>
         <option value="TN-185">185</option>
         <option value="TN-186">186</option>
         <option value="TN-187">187</option>
         <option value="TN-188">188</option>
         <option value="TN-189">189</option>
         <option value="TN-190">190</option>
         <option value="TN-191">191</option>
         <option value="TN-192">192</option>
         <option value="TN-193">193</option>
         <option value="TN-194">194</option>
         <option value="TN-195">195</option>
         <option value="TN-196">196</option>
         <option value="TN-197">197</option>
         <option value="TN-198">198</option>
         <option value="TN-199">199</option>
         <option value="TN-200">200</option>
         <option value="TN-201">201</option>
         <option value="TN-202">202</option>
         <option value="TN-203">203</option>
         <option value="TN-204">204</option>
         <option value="TN-205">205</option>
         <option value="TN-206">206</option>
         <option value="TN-207">207</option>
         <option value="TN-208">208</option>
         <option value="TN-209">209</option>
         <option value="TN-210">210</option>
         <option value="TN-211">211</option>
         <option value="TN-212">212</option>
         <option value="TN-213">213</option>
         <option value="TN-214">214</option>
         <option value="TN-215">215</option>
         <option value="TN-216">216</option>
         <option value="TN-217">217</option>
         <option value="TN-218">218</option>
         <option value="TN-219">219</option>
         <option value="TN-220">220</option>
         <option value="TN-221">221</option>
         <option value="TN-222">222</option>
         <option value="TN-223">223</option>
         <option value="TN-224">224</option>
         <option value="TN-225">225</option>
         <option value="TN-226">226</option>
         <option value="TN-227">227</option>
         <option value="TN-228">228</option>
         <option value="TN-229">229</option>
         <option value="TN-230">230</option>
         <option value="TN-231">231</option>
         <option value="TN-232">232</option>
         <option value="TN-233">233</option>
         <option value="TN-234">234</option>
         <option value="TN-235">235</option>
         <option value="TN-236">236</option>
         <option value="TN-237">237</option>
         <option value="TN-238">238</option>
         <option value="TN-239">239</option>
         <option value="TN-240">240</option>
         <option value="TN-241">241</option>
         <option value="TN-242">242</option>
         <option value="TN-243">243</option>
         <option value="TN-244">244</option>
         <option value="TN-245">245</option>
         <option value="TN-246">246</option>
         <option value="TN-247">247</option>
         <option value="TN-248">248</option>
         <option value="TN-249">249</option>
         <option value="TN-250">250</option>
         <option value="TN-251">251</option>
         <option value="TN-252">252</option>
         <option value="TN-253">253</option>
         <option value="TN-254">254</option>
         <option value="TN-255">255</option>
         <option value="TN-256">256</option>
         <option value="TN-257">257</option>
         <option value="TN-258">258</option>
         <option value="TN-259">259</option>
         <option value="TN-260">260</option>
         <option value="TN-261">261</option>
         <option value="TN-262">262</option>
         <option value="TN-263">263</option>
         <option value="TN-264">264</option>
         <option value="TN-265">265</option>
         <option value="TN-266">266</option>
         <option value="TN-267">267</option>
         <option value="TN-268">268</option>
         <option value="TN-269">269</option>
         <option value="TN-270">270</option>
         <option value="TN-271">271</option>
         <option value="TN-272">272</option>
         <option value="TN-273">273</option>
         <option value="TN-274">274</option>
         <option value="TN-275">275</option>
         <option value="TN-276">276</option>
         <option value="TN-277">277</option>
         <option value="TN-278">278</option>
         <option value="TN-279">279</option>
         <option value="TN-280">280</option>
         <option value="TN-281">281</option>
         <option value="TN-282">282</option>
         <option value="TN-283">283</option>
         <option value="TN-284">284</option>
         <option value="TN-285">285</option>
         <option value="TN-286">286</option>
         <option value="TN-287">287</option>
         <option value="TN-288">288</option>
         <option value="TN-289">289</option>
         <option value="TN-290">290</option>
         <option value="TN-291">291</option>
         <option value="TN-292">292</option>
         <option value="TN-293">293</option>
         <option value="TN-294">294</option>
         <option value="TN-295">295</option>
         <option value="TN-296">296</option>
         <option value="TN-297">297</option>
         <option value="TN-298">298</option>
         <option value="TN-299">299</option>
         <option value="TN-300">300</option>
         <option value="TN-301">301</option>
         <option value="TN-302">302</option>
         <option value="TN-303">303</option>
         <option value="TN-304">304</option>
         <option value="TN-305">305</option>
         <option value="TN-306">306</option>
         <option value="TN-307">307</option>
         <option value="TN-308">308</option>
         <option value="TN-309">309</option>
         <option value="TN-310">310</option>
         <option value="TN-311">311</option>
         <option value="TN-312">312</option>
         <option value="TN-313">313</option>
         <option value="TN-314">314</option>
         <option value="TN-315">315</option>
         <option value="TN-316">316</option>
         <option value="TN-317">317</option>
         <option value="TN-318">318</option>
         <option value="TN-319">319</option>
         <option value="TN-320">320</option>
         <option value="TN-321">321</option>
         <option value="TN-322">322</option>
         <option value="TN-323">323</option>
         <option value="TN-324">324</option>
         <option value="TN-325">325</option>
         <option value="TN-326">326</option>
         <option value="TN-327">327</option>
         <option value="TN-328">328</option>
         <option value="TN-329">329</option>
         <option value="TN-330">330</option>
         <option value="TN-331">331</option>
         <option value="TN-332">332</option>
         <option value="TN-333">333</option>
         <option value="TN-334">334</option>
         <option value="TN-335">335</option>
         <option value="TN-336">336</option>
         <option value="TN-337">337</option>
         <option value="TN-338">338</option>
         <option value="TN-339">339</option>
         <option value="TN-340">340</option>
         <option value="TN-341">341</option>
         <option value="TN-342">342</option>
         <option value="TN-343">343</option>
         <option value="TN-344">344</option>
         <option value="TN-345">345</option>
         <option value="TN-346">346</option>
         <option value="TN-347">347</option>
         <option value="TN-348">348</option>
         <option value="TN-349">349</option>
         <option value="TN-350">350</option>
         <option value="TN-351">351</option>
         <option value="TN-352">352</option>
         <option value="TN-353">353</option>
         <option value="TN-354">354</option>
         <option value="TN-355">355</option>
         <option value="TN-356">356</option>
         <option value="TN-357">357</option>
         <option value="TN-358">358</option>
         <option value="TN-359">359</option>
         <option value="TN-360">360</option>
         <option value="TN-361">361</option>
         <option value="TN-362">362</option>
         <option value="TN-363">363</option>
         <option value="TN-364">364</option>
         <option value="TN-365">365</option>
         <option value="TN-366">366</option>
         <option value="TN-367">367</option>
         <option value="TN-368">368</option>
         <option value="TN-369">369</option>
         <option value="TN-370">370</option>
         <option value="TN-371">371</option>
         <option value="TN-372">372</option>
         <option value="TN-373">373</option>
         <option value="TN-374">374</option>
         <option value="TN-375">375</option>
         <option value="TN-376">376</option>
         <option value="TN-377">377</option>
         <option value="TN-378">378</option>
         <option value="TN-379">379</option>
         <option value="TN-380">380</option>
         <option value="TN-381">381</option>
         <option value="TN-382">382</option>
         <option value="TN-383">383</option>
         <option value="TN-384">384</option>
         <option value="TN-385">385</option>
         <option value="TN-386">386</option>
         <option value="TN-387">387</option>
         <option value="TN-388">388</option>
         <option value="TN-389">389</option>
         <option value="TN-390">390</option>
         <option value="TN-391">391</option>
         <option value="TN-392">392</option>
         <option value="TN-393">393</option>
         <option value="TN-394">394</option>
         <option value="TN-395">395</option>
         <option value="TN-396">396</option>
         <option value="TN-397">397</option>
         <option value="TN-398">398</option>
         <option value="TN-399">399</option>
         <option value="TN-400">400</option>
         <option value="TN-401">401</option>
         <option value="TN-402">402</option>
         <option value="TN-403">403</option>
         <option value="TN-404">404</option>
         <option value="TN-405">405</option>
         <option value="TN-406">406</option>
         <option value="TN-407">407</option>
         <option value="TN-408">408</option>
         <option value="TN-409">409</option>
         <option value="TN-410">410</option>
         <option value="TN-411">411</option>
         <option value="TN-412">412</option>
         <option value="TN-413">413</option>
         <option value="TN-414">414</option>
         <option value="TN-415">415</option>
         <option value="TN-416">416</option>
         <option value="TN-417">417</option>
         <option value="TN-418">418</option>
         <option value="TN-419">419</option>
         <option value="TN-420">420</option>
         <option value="TN-421">421</option>
         <option value="TN-422">422</option>
         <option value="TN-423">423</option>
         <option value="TN-424">424</option>
         <option value="TN-425">425</option>
         <option value="TN-426">426</option>
         <option value="TN-427">427</option>
         <option value="TN-428">428</option>
         <option value="TN-429">429</option>
         <option value="TN-430">430</option>
         <option value="TN-431">431</option>
         <option value="TN-432">432</option>
         <option value="TN-433">433</option>
         <option value="TN-434">434</option>
         <option value="TN-435">435</option>
         <option value="TN-436">436</option>
         <option value="TN-437">437</option>
         <option value="TN-438">438</option>
         <option value="TN-439">439</option>
         <option value="TN-440">440</option>
         <option value="TN-441">441</option>
         <option value="TN-442">442</option>
         <option value="TN-443">443</option>
         <option value="TN-444">444</option>
         <option value="TN-445">445</option>
         <option value="TN-446">446</option>
         <option value="TN-447">447</option>
         <option value="TN-448">448</option>
         <option value="TN-449">449</option>
         <option value="TN-450">450</option>
         <option value="TN-451">451</option>
         <option value="TN-452">452</option>
         <option value="TN-453">453</option>
         <option value="TN-454">454</option>
         <option value="TN-455">455</option>
         <option value="TN-456">456</option>
         <option value="TN-457">457</option>
         <option value="TN-458">458</option>
         <option value="TN-459">459</option>
         <option value="TN-460">460</option>
         <option value="TN-461">461</option>
         <option value="TN-462">462</option>
         <option value="TN-463">463</option>
         <option value="TN-464">464</option>
         <option value="TN-465">465</option>
         <option value="TN-466">466</option>
         <option value="TN-467">467</option>
         <option value="TN-468">468</option>
         <option value="TN-469">469</option>
         <option value="TN-470">470</option>
         <option value="TN-471">471</option>
         <option value="TN-472">472</option>
         <option value="TN-473">473</option>
         <option value="TN-474">474</option>
         <option value="TN-475">475</option>
         <option value="TN-476">476</option>
         <option value="TN-477">477</option>
         <option value="TN-478">478</option>
         <option value="TN-479">479</option>
         <option value="TN-480">480</option>
         <option value="TN-481">481</option>
         <option value="TN-482">482</option>
         <option value="TN-483">483</option>
         <option value="TN-484">484</option>
         <option value="TN-485">485</option>
         <option value="TN-486">486</option>
         <option value="TN-487">487</option>
         <option value="TN-488">488</option>
         <option value="TN-489">489</option>
         <option value="TN-490">490</option>
         <option value="TN-491">491</option>
         <option value="TN-492">492</option>
         <option value="TN-493">493</option>
         <option value="TN-494">494</option>
         <option value="TN-495">495</option>
         <option value="TN-496">496</option>
         <option value="TN-497">497</option>
         <option value="TN-498">498</option>
         <option value="TN-499">499</option>
         <option value="TN-500">500</option>
         <option value="TN-501">501</option>
         <option value="TN-502">502</option>
         <option value="TN-503">503</option>
         <option value="TN-504">504</option>
         <option value="TN-505">505</option>
         <option value="TN-506">506</option>
         <option value="TN-507">507</option>
         <option value="TN-508">508</option>
         <option value="TN-509">509</option>
         <option value="TN-510">510</option>
         <option value="TN-511">511</option>
         <option value="TN-512">512</option>
         <option value="TN-513">513</option>
         <option value="TN-514">514</option>
         <option value="TN-515">515</option>
         <option value="TN-516">516</option>
         <option value="TN-517">517</option>
         <option value="TN-518">518</option>
         <option value="TN-519">519</option>
         <option value="TN-520">520</option>
         <option value="TN-521">521</option>
         <option value="TN-522">522</option>
         <option value="TN-523">523</option>
         <option value="TN-524">524</option>
         <option value="TN-525">525</option>
         <option value="TN-526">526</option>
         <option value="TN-527">527</option>
         <option value="TN-528">528</option>
         <option value="TN-529">529</option>
         <option value="TN-530">530</option>
         <option value="TN-531">531</option>
         <option value="TN-532">532</option>
         <option value="TN-533">533</option>
         <option value="TN-534">534</option>
         <option value="TN-535">535</option>
         <option value="TN-536">536</option>
         <option value="TN-537">537</option>
         <option value="TN-538">538</option>
         <option value="TN-539">539</option>
         <option value="TN-540">540</option>
         <option value="TN-541">541</option>
         <option value="TN-542">542</option>
         <option value="TN-543">543</option>
         <option value="TN-544">544</option>
         <option value="TN-545">545</option>
         <option value="TN-546">546</option>
      </select>
  </div>
</div>
<?php 

echo '</div>'; 

} // End if Macro Terrazas del Norte





?>