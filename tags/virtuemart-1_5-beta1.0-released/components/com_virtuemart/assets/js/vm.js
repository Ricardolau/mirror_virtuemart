var VM = (function($){
	
	var undefined,
	
	/**
	 * Configuration Class
	 */
	VMConfig = window.VMConfig = (function(){

		props = {			
			//CSS selector for dependent combos
			dependentSelector: 'select[class*=dependent]',
				
			//Regular Expr to parse parent list
			dependentExpr: /dependent\[(.*)\]/i,
			
			baseUrl: ''
		};
		
		return {
			
			get: function(name){
				if( name.constructor == String && props[name] !== undefined ){
					return props[name];
				}
				return false;
			},
			
			set: function(items, value){
				if( items.constructor == String && props[items] !== undefined ){
				
					props[items] = value;
					return props[items];
				}
				else if(items.constructor === Object){
					for(var i in items){
						props[i] = items[i];
					}
				}
				return;
			}
		};
	})(),
	
	
	
	/**
	 * Cache namespace. Useful for temporal data
	 * 
	 * @author jseros
	 * 
	 */	
	VMCache = window.VMCache = (function(){
		var slots = {};
		
		return {
			get: function(name){
				if( name.constructor == String && slots[name] !== undefined ){
					return slots[name];
				}
				return false;
			},
		
			set: function(name, value){
			
				if( name.constructor == String ){
					slots[name] = value;					
					return slots[name];
				}
				return;
			},
			
			add: function(name, values, index){
				if( name.constructor == String ){	
					
					if( !slots[name] ){
						slots[name] = {};
					}
					
					if(index !== undefined){
						if(!slots[name][index]){
							return slots[name][index] = VM.merge({}, values);
						}
						else{
							return slots[name][index] = VM.merge(slots[name][index], values);
						}
					}
				}
				
				return this.set(name, VM.merge({}, values));
			}
		}
		
	})();
	
	return {		
		
		merge: function(destin, source){		
			for(var i in source){
				destin[i] = source[i];
			}
			
			return destin;
		},
		
		inArray: function(obj, item){
			for(var i = 0, n = obj.length; i < n; i++){
				if(obj[i] ===  item){
					return i;
				}
			}
		},
		
		/**
		 * Parse country-state dependent combos
		 * The Select Element must have class="dependent[parent_id]"
		 * 
		 * TODO: Performance issues
		 * 
		 * @author jseros
		 */
		countryStateList: function(){
			
			var populateStates = function(statesCombo, countries){
				var statesC = $(statesCombo),
				statesCache = VMCache.get('states'),
				statesGroup = [],
				states2add = '';

				statesCombo.$countries = statesCombo.$countries ? statesCombo.$countries : [];
					
				for(var i = 0, n = statesCombo.$countries.length; i < n; i++){
				
					if( VM.inArray( countries, statesCombo.$countries[i]) === undefined ){
						for( var state in statesCache[ statesCombo.$countries[i] ] ){
							statesC.find('[value='+ statesCache[ statesCombo.$countries[i] ][state].state_id  +']').remove();
						}
					}
				}
					
				for(var i = 0, n = countries.length; i < n; i++){
				
					if( VM.inArray( statesCombo.$countries, countries[i]) === undefined ){
						statesGroup = statesCache[ countries[i] ];
						
						for(var j in statesGroup){
							if(statesGroup[j].state_id){
								states2add += '<option value="'+ statesGroup[j].state_id +'">'+ statesGroup[j].state_name +'</option>';
							}
						}
					}
				}
				
				statesCombo.$countries = countries;
				statesC.append( states2add ).removeAttr('disabled');
			};
						
			$( VMConfig.get('dependentSelector') ).each(function(){
						
				var params = VMConfig.get('dependentExpr').exec( this.className ), //parse parent id
				that = this;
						
				this.className = this.className || '';
							
				if( params && params[1]){
				
					$('#'+ params[1]).change(function(){
						var countries = $(this).val(),
						statesCache = VMCache.get('states'), //shortchut to [[this]] and scope solution
						country = 0,
						countriesSend = [],
						cStack = [];
						
						countries = countries.push ? countries : [countries];
					
						$(that).attr('disabled', 'disabled');
						
						for(var i = 0, n = countries.length; i < n; i++){
							
							country = countries[i];
							
							//use cache solution to speed up the process
							if( statesCache[country] ){
								cStack.push( country );
							}
							else{
								countriesSend.push(country);
							}
						}
						
						if( countriesSend.length ){
							$.ajax({
								url: VMConfig.get('countryStateURL') + countriesSend.toString(),
								dataType: 'json',
								success: function(states){
									for(var country in states){
										cStack.push( country );
										VMCache.add('states', states[country], country);
									}
									
									populateStates( that, cStack );
									return true;
								}
							});
						}
						else{
							populateStates( that, cStack );
						}
					});
				}
			});			
			return this;
		},
		
		add: function(props){
			if(props.constructor === Object){
				for(var i in props){
					this[i] = props[i];
				}
			}
			return this;
		}
	};
	
})(jQuery);