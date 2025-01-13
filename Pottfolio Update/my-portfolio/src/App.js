import './App.css';
import Body from './components/Body';
import DeskopNav from './components/Nav';
import './Fonts.css';
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
  return (
    <div className="App">
      <DeskopNav/>
      <Body/>
    </div>
  );
}

export default App;
