#!/bin/bash
this_dir=`dirname $0`
unset GEM_HOME
unset GEM_PATH
export PATH="$PATH:"~/.rvm/bin
[[ -s ~/.rvm/scripts/rvm ]] && source ~/.rvm/scripts/rvm
log_file="${this_dir}/../log/dispatch.log"
#echo '----------------------------------------' >>"${log_file}"
#date >>"${log_file}"
#ruby -v >>"${log_file}"
ruby "${this_dir}/dispatch_fcgi.rb" "$@" 2>>"${log_file}"
