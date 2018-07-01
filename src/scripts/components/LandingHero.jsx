import PropTypes from 'prop-types';
import V8chLogo from './V8chLogo';

const { Component } = wp.element;

class LandingHero extends Component {
    constructor() {
        super(...arguments);
        console.log(`[LandingHero] constructor() this.props: ${JSON.stringify(this.props)}`);
    }
    render() {        
        return (
            <div className="frame frame--dark-background frame--hero type--v8ch">
                <div className="frame__container">
                    <div className="dual-header dual-header--light">
                        <h3>Robert Pratt</h3>
                        <h5>Full-stack developer</h5>
                    </div>
                </div>
                <div className="frame__container frame__container--center">
                    <V8chLogo size={this.props.logoSize}/>
                </div>
                <div className="frame__container frame__container--bottom">
                    <div className="split-header split-header--light">
                        <h4>Favor creation</h4>
                        <h5>Over consumption</h5>
                    </div>
                </div>
            </div>
        );
    }
}

LandingHero.propTypes = {logoSize: PropTypes.string};

export default LandingHero;